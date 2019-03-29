<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'sdfsdfg';
    $email_subject = 'sdfsdfg';
    $email_body = 'zsdfzsdf';

    $to = "hello@ed-yu.com";
    $headers="dsfgdfgdfg";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: contact.html");
?>