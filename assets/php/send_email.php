<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $services = $_POST['services'];
    $message = $_POST['message'];

    $to = 'abcreations656@gmail.com'; // Your email address
    $subject = 'New message from your website';
    $body = "Name: $full_name\nEmail: $email\nPhone: $phone\nServices: $services\n\nMessage:\n$message";

    if (mail($to, $subject, $body)) {
        echo 'Thank you for your message. We will get back to you soon.';
    } else {
        echo 'Sorry, there was an error sending your message. Please try again later.';
    }
}
?>
