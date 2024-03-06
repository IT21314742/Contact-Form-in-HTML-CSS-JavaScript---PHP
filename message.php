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
    $sender = "From: $email"; //sender email
    if(mail($receiver, $subject, $body, $sender)){  //mail() is a inbuilt php function to send a mail
        echo "Your message has been sent";
    }else{
        echo "Sorry, faild to send your message!";
    }

    }else{
        echo "Enter a valid em"
    }
}
