<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$website = $_POST['website'];
$message = $_POST['message'];

if(!empty($email) && !empty ($message)){  //if email and message field is not empty
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){ //validate user entered Email
    $receiver = "adhikurera@gmail.com"; //validate receivered email address
    $subject =  "form: $name <$email>"; //subject of the email. subject looks like from:adhikurera@gmail.com
    //merging concating all user values inside body variable. \n is used for new line
    $body = "Name: $name\nEmail: $email\nPhone: $Phone\nWebsite:    $website\n\nMessage: $message\n\nRegards,\n$name";
    $sender = "From: $email"; //
    }
}
