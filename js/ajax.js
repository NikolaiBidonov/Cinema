const SYPEX_URL = 'https://api.sypexgeo.net/'
const GLAV_URL = 'https://glavpunkt.ru/api/get_rf_cities'


$.ajax({
    type: "GET",
    dataType: "json",
    url: SYPEX_URL,
    success: function (data) {
        let city = data['city']['name_ru'];
        $('#cityModal').animate({
            top: '5rem',
            opacity: 1
        }, 1500);
        $('#city-name').html(city);
        $('#formCity').html(city);
    },
    error: function () {
        $('#changeCityModal').animate({
            right: '6rem'
        }, 300);
        getCitiesByApi();
    }
})

let cities;

$('#cityYes').on('click', function () {
    $('#cityModal').animate({
        opacity: 0
    }, 1000)

})

function getCitiesByApi () {
    $.ajax({
        type: "GET",
        dataType: "json",
        url: GLAV_URL,
        success: function (data) {
            cities = data;
            $('#inputCity').keyup(function () {
                let search = $(this).val();
                let count = 0;
                let html = '<ul>';
                for (let i = 0; i < cities.length; i++) {
                    if (cities[i].name.toLowerCase().indexOf(search.toLowerCase()) >= 0 && count <= 5) {
                        html += '<li data-city="' + cities[i].name + '">' + cities[i].name + ' (' + cities[i].area + ')</li>'
                        count++;
                    }
                }
                html += '</ul>';
                $('#result').html(html);
            })
        }
    })
    
}

$(document).ready(function () {
    $('#cityNo').on('click', function () {
        $('#cityModal').animate({
            right: '-26rem'
        }, 300)
        $('#changeCityModal').animate({
            right: '6rem'
        }, 300)
        if (!cities) {
            getCitiesByApi();
        }
    })
})

$('body').on('click', '#result li', function () {
    $('#city-name').html($(this).data('city'));
    $('#changeCityModal').animate({
        right: '-26rem'
    }, 300);
})

$('#city-name').on('click', function () {
    $('#changeCityModal').animate({
        right: '6rem'
    }, 300)
    getCitiesByApi();
})