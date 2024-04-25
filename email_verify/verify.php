<?php
if (isset($_GET['email'])) {
    $email = $_GET['email'];

    // Perform necessary verification checks here
    // For example, update the database to mark the email as verified

    echo "Email $email has been successfully verified.";
} else {
    echo "Invalid verification link.";
}
?>
