let genres = ['фантастика', 'приключения', 
'боевик', 'фэнтези', 'комедия', 'драма', 'мультфильм'];
let site = 'https://www.kinopoisk.ru/film/'
let films = [
    {start : '10:00', 
    name: 'Человек-паук',
    genre: genres[0] + ', ' + genres[1] + ', ' + genres[2],
    siteLink: site + 'chelovek-pauk-2002-838/',
    },
    {start: '12:00',
    name: 'Собачья жизнь 2',
    genre: genres[3] + ', ' + genres[5] + ', ' + genres[4],
    siteLink: site + '1122114/',
    },
    {start : '14:00', 
    name: 'История игрушек 4',
    genre: genres[6] + ', ' + genres[1] + ', ' + genres[4],
    siteLink: site + '846824/',
    },
    {start: '16:00',
    name:  'Люди в черном: Интернэшнл',
    genre: genres[3] + ', ' + genres[2] + ', ' + genres[1],
    siteLink: site + '693730/',
    },
]
const svg = document.getElementById('svgPlus')
let elBody = document.getElementById('tableBody');
for (var i=0; i<films.length; i++) {
    
    
    const elRow = document.createElement('tr');
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
}