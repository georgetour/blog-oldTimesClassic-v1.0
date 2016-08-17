<?php

include 'contacted.php';

//Variables to use below
$error_message = '';//Error message for the user if something goes wrong
$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';//Email pattern acceptance
$formSubmitted = 'Thank you for contacting .I will try to respond soon.'; //Form submitted message
$flag = '';// flag to control the form and how it proceeds

if(isset($_POST['makeContact'])&&(($flag==0))){


    //Variables for the email
    $to = "hello@oldtimesclassic.com";
    $subject = $_POST['emailSubject'];
    $from = $_POST['email'];
    $message = $_POST['description'];
    
    // create email headers
    $headers = 'From: '.$from."\r\n".

        'Reply-To: '.$from."\r\n" .

        'X-Mailer: PHP/' . phpversion();
    

    if(!preg_match($email_exp,$from)) {
        global $error_message;
        $error_message .= 'The Email Address you entered does not appear to be valid.<br />';

        $formSubmitted = '';
        $flag=1;
    }
    else{
        $formSubmitted = 'Thank you for contacting .I will try to respond soon.';
        $flag = 0;
        mail($to, $subject, $message, $headers);
    }

}




?>