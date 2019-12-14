let getPresent = document.querySelector('#getPresent');
let presentModal = document.querySelector('.present-modal');

getPresent.onclick = function () {
    presentModal.style.display = 'block';
}

let closePresent = document.querySelector('#closePresent');

closePresent.onclick = function () {
    presentModal.style.display = 'none';
}

$('.input-form').on('focus', function() {
    $(this).next('.input-required').remove();
})

$('.presentForm').on('submit', function (e) {
    e.preventDefault();
    let form = $(this),
        hasValue = true,
        data = form.serialize();
    form.find('.input-form').each(function () {
        if (!$(this).val()) {
            $(this).after('<p class="input-required">Поле обязательно для заполнения</p>');
            hasValue = false;

        }
    });
    if (hasValue) {
        $('body').append('<div class="ajax-loader"></div>');
        $.ajax({
            url: 'order.php',
            data: data,
            method: 'post',
            dataType: 'json',
            success: function (msg) {
                $('.ajax-loader').remove();
                if (msg.name && msg.phone) {
                    $('#presentModal').hide();
                    let html='Спасибо, ' + msg.name + '. Мы свяжемся с Вами по телефону ' + msg.phone;

                    $('#presentModalSuccessWrap').show();
                    $('#presentModalSuccessText').html(html);
                    $('#closeSuccess').on('click', function() {
                        $('#presentModalSuccessWrap').hide();
                       })
                    
                    //console.log(msg.name + '-' + msg.phone)
                }
            },
            error: function() {
                $('.ajax-loader').remove();
               $('#presentModal').hide();
               $('#presentModalErrorWrap').show();
               
               $('#closeError').on('click', function() {
                $('#presentModalErrorWrap').hide();
               })
            }
        })
    }
})