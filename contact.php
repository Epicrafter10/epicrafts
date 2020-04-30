<?php
    if (isset($_POST['submit'])){
        $email = $_POST['email'];
        $name = $_POST['name'];
        $message = $_POST['message'];
        $subject = "New mail from Epicrafts";
        $recipient = "epicrafter10@gmail.com";
        $formcontent = "From: $email\nName: $name \nMessage: $message";
        $mailheader = "From: $email";
        mail($recipient, $subject, $formcontent, $mailheader);
    
        echo 'Email sent.';
    }

?>