<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "jasrajsinghw@email.com";
    $subject = "New Newsletter Signup";
    $email = htmlspecialchars($_POST['email']);

    $body = "Email: $email";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for signing up!";
    } else {
        echo "Something went wrong. Please try again.";
    }
}
?>

