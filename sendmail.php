<?php
// Allow CORS just in case (optional)
header("Access-Control-Allow-Origin: *");

// Collect form data safely
$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';

// Recipient email
$to = "blasthits@gmail.com";
$subject = "New message from your website";

// Email body
$body = "Name: $name\nEmail: $email\nMessage:\n$message";

// Headers
$headers = "From: Zablon Consulting <info@xflirta.com>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Send the email
if(mail($to, $subject, $body, $headers)){
    echo "success";
} else {
    echo "failed";
}
?>