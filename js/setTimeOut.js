const modal = document.querySelector('.modal');
const div = document.querySelector('.modal > div');
const text = document.querySelector('.modal > div > h5');


// Function to show and hide the pop up
setTimeout(() => {
    modal.style.backgroundColor = "transparent";
    div.style.backgroundColor = "transparent";
    text.style.color = "transparent";

    modal.style.transition = "all 1s ease-out"
    div.style.transition = "all 1s ease-out"
    text.style.transition = "all 1s ease-out"

}, 1300)

setTimeout(() => {
    modal.style.display = "none";
}, 2500)