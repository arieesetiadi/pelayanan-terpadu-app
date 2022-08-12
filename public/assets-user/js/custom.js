const notificationButton = document.getElementById("notification-button");
const notificationBox = document.getElementById("notification-box");

const profileButton = document.getElementById("profile-button");
const profileBox = document.getElementById("profile-box");

const main = document.querySelector("section#main");
const banner = document.querySelector("#banner-container");

notificationButton.addEventListener("click", () => {
    notificationBox.classList.toggle("d-none");
    profileBox.classList.add("d-none");
});

profileButton.addEventListener("click", () => {
    notificationBox.classList.add("d-none");
    profileBox.classList.toggle("d-none");
});

main.addEventListener("click", () => {
    notificationBox.classList.add("d-none");
    profileBox.classList.add("d-none");
});

banner.addEventListener("click", () => {
    notificationBox.classList.add("d-none");
    profileBox.classList.add("d-none");
});
