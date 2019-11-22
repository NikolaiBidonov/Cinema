const sypex_url = 'https://api.sypexgeo.net/'

function getRequest(url, callback){
    let xhr = new XMLHttpRequest();
    let async = true;
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            callback.call(xhr.responseText)
        }
    }
    xhr.open("GET", url, async);
    xhr.send();
    return(xhr.responseText);
}

$(document).ready(function() {
    getRequest(sypex_url, function() {
        let answer = $.parseJSON(this);
        let city = answer['city']['name_ru'];
        $('#city-name').html(city);
    })
})