<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    $mail = new PHPMailer(true);
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';  // Your SMTP server
        $mail->SMTPAuth   = true;
        $mail->Username   = 'jasrajsinghw@gmail.com';  // Your email
        $mail->Password   = 'hcec miyz uaia xiqt';  // App password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Recipient & Content
        $mail->setFrom('your@gmail.com', 'Newsletter');
        $mail->addAddress('your@email.com');
        $mail->Subject = 'New Newsletter Signup';
        $mail->Body    = "New email signup: $email";

        $mail->send();
        echo "Thank you for signing up!";
    } catch (Exception $e) {
        echo "Message could not be sent. Error: {$mail->ErrorInfo}";
    }
}
?>
