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

        //if response is an error like below one of them status color switch to red if not form will reset
        if(response,indexeOf("Email and message is required!") != -1 || response.indexeOf("Enter a valid email Email address") || response.indexeOf("Sorry, faild to send your message!")){
            statusTxt.style.color = "red";
        }else{
            form
        }
    }
}