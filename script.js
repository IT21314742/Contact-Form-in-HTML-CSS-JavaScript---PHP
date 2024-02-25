const form = document.querySelector("form"),
    statusTxt = form.querySelector(".button-area span");

form.onsubmit = (e) => {
    e.preventDefault(); //preventing form from auto sumbiting
}