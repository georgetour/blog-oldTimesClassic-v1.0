<?php

include_once 'contacted.php';

//Variables to use below
$error_message = '';//Error message for the user if something goes wrong
$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';//Email pattern acceptance
$formSubmitted = 'Thank you for contacting .I will try to respond soon.'; //Form submitted message
$flag = '';// flag to control the form and how it proceeds

if(isset($_POST['makeContact'])&&(($flag==0))){


    //Varibles for the email 
    $email_to = "hello@oldtimesclassic.com";
    $email_subject = $_POST['emailSubject'];
    $email_from = $_POST['email'];
    $email_message = $_POST['description'];
    
    // create email headers
    $headers = 'From: '.$email_from."\r\n".

        'Reply-To: '.$email_from."\r\n" .

        'X-Mailer: PHP/' . phpversion();
    

    if(!preg_match($email_exp,$email_from)) {
        global $error_message;
        $error_message .= 'The Email Address you entered does not appear to be valid.<br />';

        $formSubmitted = '';
        $flag=1;
    }
    else{
        $formSubmitted = 'Thank you for contacting .I will try to respond soon.';
        $flag = 0;
        mail($email_to, $email_subject, $email_message, $headers);
    }

}




?>