<?php
if (isset($_POST['submit'])){
    
    // $sendTo = "eddytheflow@gmail.com";
    $sendTo = "hello@ed-yu.com";
    $subject = "EDYUCOM message: ".$email;

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $body = "You received a contact form submission from ed-yu.com!\n====================================\n Name: ".$name."\n Email: ".$email."\n Message: ".$message;
    $headers = "EDYUCOM, from: ".$email;

    mail($sendTo, $subject, $body, $headers);
    header("Location: ../contacted.html");
}
?>
