const profileButton = document.getElementById('profile-button');
const profileBox = document.getElementById('profile-box');
// const main = document.querySelector('section#main');
// const banner = document.querySelector('#banner-container');

profileButton.addEventListener('click', () => {
    profileBox.classList.toggle('d-none');
})

// main.addEventListener('click', () => {
//     profileBox.classList.add('d-none');
// })

// banner.addEventListener('click', () => {
//     profileBox.classList.add('d-none');
// })