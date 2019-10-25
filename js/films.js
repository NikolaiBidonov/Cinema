let genres = ['фантастика', 'приключения', 
'боевик', 'фэнтези', 'комедия', 'драма', 'мультфильм'];
let site = 'https://www.kinopoisk.ru/film/'
let films = [
    {start : '10:00', 
    name: 'Человек-паук',
    genre: genres[0] + ', ' + genres[1] + ', ' + genres[2],
    siteLink: site + 'chelovek-pauk-2002-838/',
    price: 250,
    },
    {start: '12:00',
    name: 'Собачья жизнь 2',
    genre: genres[3] + ', ' + genres[5] + ', ' + genres[4],
    siteLink: site + '1122114/',
    price: 260,
    },
    {start : '14:00', 
    name: 'История игрушек 4',
    genre: genres[6] + ', ' + genres[1] + ', ' + genres[4],
    siteLink: site + '846824/',
    price: 180, 
    },
    {start: '16:00',
    name:  'Люди в черном: Интернэшнл',
    genre: genres[3] + ', ' + genres[2] + ', ' + genres[1],
    siteLink: site + '693730/',
    price: 190,
    },
]


const svg = document.getElementById('svgPlus')
let elBody = document.getElementById('tableBody');
let orderFormWrap = document.getElementById('orderFormWrap')

for (var i=0; i<films.length; i++) {
     
    let elRow = document.createElement('tr');
    const start = document.createElement('td');
    start.innerText = films[i].start;

    const link = document.createElement('a');
    link.href = films[i].siteLink;
    link.title = 'Кинопоиск';
    link.target= '_blank';
    link.appendChild(document.createTextNode(films[i].name));

    const name = document.createElement('td');
    const genre = document.createElement('td');
    genre.innerText = films[i].genre;

    const plus = document.createElement('td');
    
    const price = films[i].price;
    name.appendChild(link);
    elRow.appendChild(start);
    elRow.appendChild(name);
    elRow.appendChild(genre);
    elRow.appendChild(plus);
    elBody.appendChild(elRow);
    plus.appendChild(svg.content.cloneNode(true))
    start.classList.add('col1');
    name.classList.add('col2');
    genre.classList.add('col3');
    plus.classList.add('col4');

    elRow.onclick = function () {
        orderFormWrap.style.display = 'block'
        
        let orderFilmStart = document.getElementById('orderFilmStart');
        let orderFilmName = document.getElementById('orderFilmName');
        let orderFilmGenre = document.getElementById('orderFilmGenre');
        let orderFilmPrice = document.getElementById('orderFilmPrice');
        let orderFilmTotalPrice = document.getElementById('orderFilmTotalPrice');
        let orderCountTicket = document.getElementById('orderCountTicket');

        orderFilmStart.innerText = start.innerText;
        orderFilmName.innerText = name.innerText;
        orderFilmGenre.innerText = genre.innerText;
        orderFilmPrice.innerText = price;
        orderFilmTotalPrice.innerText = price * orderCountTicket.value;

        orderCountTicket.onchange = function () {
            orderFilmTotalPrice.innerText = price * orderCountTicket.value;
    }
}


let closeButton = document.getElementById('closeButton');
closeButton.onclick = function () {
    orderFormWrap.style.display = 'none'
    let orderFormReset = document.getElementById('orderForm').reset();
    
}
let thanksForOrderWrap = document.getElementById('thanksForOrderWrap');
let orderFilmButton = document.getElementById('orderFilmButton');
orderFilmButton.onclick = function() {
    let orderClientName = document.getElementById('orderClientName');
    let orderClientPhone = document.getElementById('orderClientPhone');

    if (!orderClientName.value && !orderClientPhone.value) {
        orderClientName.style.border = '1px solid #fc0000'
        orderClientPhone.style.border = '1px solid #fc0000'
        
        
    } else {
        orderClientName.style.border = '1px solid #a3cc40'
        orderClientPhone.style.border = '1px solid #a3cc40'
        orderFormWrap.style.display = 'none';
        thanksForOrderWrap.style.display = 'block';
        console.group ('Информация о заказе')
            console.log ('Начало сеанса', start.innerText);
            console.log ('Название фильма', orderFilmName.innerText);
            console.log ('Стоимость билета', orderFilmPrice.innerText);
            console.log ('Количество билетов', orderCountTicket.value);
            console.log ('Сумма заказа', orderFilmTotalPrice.innerText);
            console.log ('Имя гостя', orderClientName.value);
            console.log ('Номер телефона', orderClientPhone.value);
        console.groupEnd();

    }
    

}

let thanksForOrderClose = document.getElementById('thanksForOrderClose');
thanksForOrderClose.onclick = function () {
    thanksForOrderWrap.style.display = 'none'
}
}