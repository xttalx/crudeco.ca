<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "jasrajsinghw@email.com";
    $subject = "New Investment Inquiry";
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for your interest!";
    } else {
        echo "Something went wrong. Please try again.";
    }
}
?>
