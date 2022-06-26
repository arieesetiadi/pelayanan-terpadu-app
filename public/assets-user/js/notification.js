const notificationButton = document.getElementById('notification-button');
const notificationBox = document.getElementById('notification-box');
const main = document.querySelector('section#main');
const banner = document.querySelector('#banner-container');

notificationButton.addEventListener('click', () => {
    notificationBox.classList.toggle('d-none');
})

main.addEventListener('click', () => {
    notificationBox.classList.add('d-none');
})

banner.addEventListener('click', () => {
    notificationBox.classList.add('d-none');
})