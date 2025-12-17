<?php
if(isset($_POST['submit'])){
    $to = "blasthits@gmail.com"; // Your cPanel email
    $subject = "New message from your website";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    $headers = "From: info@xflirta.com\r\n";
    $headers .= "Reply-To: $email\r\n";

    if(mail($to, $subject, $body, $headers)){
        echo "success";
    } else {
        echo "failed";
    }
}
?>
