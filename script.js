const form = document.querySelector("form"),
    statusTxt = form.querySelector(".button-area span");

form.onsubmit = (e) => {
    e.preventDefault(); //preventing form from auto sumbitting
    statusTxt.style.color = "#0D6EFD";
    statusTxt.style.display = "block";

    let xhr = new XMLHttpRequest(); //creating new xml object
    xhr.open("POST", "message.php", true); //sending POST request to message.php
    xhr.onload = ()=>{ //once AJAX loaded
    if(xhr.readyState == 4 && xhr.status == 200){//if ajax response status is 200 and ready status is no any error}
        let response = xhr.response; //storing ajax response in a response variable
    }
}