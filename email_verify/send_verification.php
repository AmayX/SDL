<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to_email = $_POST['email'];
    $subject = "Email Verification";
    $message = "Click the following link to verify your email: <a href='http://yourwebsite.com/verify.php?email=$to_email'>Verify Email</a>";
    $headers = "From: yourwebsite@example.com\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Send the email
    if (mail($to_email, $subject, $message, $headers)) {
        echo "Verification email sent successfully. Please check your email.";
    } else {
        echo "Failed to send verification email. Please try again later.";
    }
}
?>
