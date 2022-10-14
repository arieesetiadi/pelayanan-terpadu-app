// Search + Filter
const searchBox = document.getElementById("searchBox");
const fitlerKeyword = document.getElementById("filterKeyword");

searchBox.addEventListener("input", () => {
    fitlerKeyword.value = searchBox.value;
});
