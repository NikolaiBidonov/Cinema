
let genres = ['фантастика', 'приключения', 
'боевик', 'фэнтези', 'комедия', 'драма', 'мультфильм'];

let films = [
    ['10:00', 'Человек-паук', genres[0] + ', ' + genres[1] + ', ' + genres[2]],
    ['12:00', 'Собачья жизнь 2', genres[3] + ', ' + genres[5] + ', ' + genres[4]],
    ['14:00', 'История игрушек 4', genres[6] + ', ' + genres[1] + ', ' + genres[4]],
    ['16:00', 'Люди в черном: Интернэшнл', genres[3] + ', ' + genres[2] + ', ' + genres[1]],
]



const elBody = document.getElementById('tableBody');
for (var i=0; i<films.length; i++) {
    
    const elRow = document.createElement('tr')
    const start = document.createElement('td')
    start.innerText = films[i][0]

    const link = document.createElement('a')
    link.href = 'https://www.kinopoisk.ru/film/chelovek-pauk-2002-838/'
    link.title = 'Кинопоиск'
    link.target= '_blank'
    link.appendChild(document.createTextNode(films[i][1]))

    const name = document.createElement('td')
    const genre = document.createElement('td')
    genre.innerText = films [i][2]

    const plus = document.createElement('td')
    const container = document.createElement('div')
    
    plus.appendChild(container)
    name.appendChild(link)
    elRow.appendChild(start)
    elRow.appendChild(name)
    elRow.appendChild(genre)
    elRow.appendChild(plus)
    elBody.appendChild(elRow)
    start.classList.add('col1');
    name.classList.add('col2');
    genre.classList.add('col3')
    container.classList.add('svgImage')
    container.classList.add('col4')
    

}