let getPresent = document.querySelector('#getPresent');
let presentModal = document.querySelector('.present-modal');

getPresent.onclick = function() {
    presentModal.style.display = 'block';
}

let closePresent = document.querySelector('#closePresent');

closePresent.onclick = function() {
    presentModal.style.display = 'none';
}