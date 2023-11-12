<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recipient_email = "amr.globeegypt@gmail.com";
    $from_email = $_POST[email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    $headers = "From: $from_email";

    if (mail($recipient_email, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Email sending failed.";
    }
} else {
    echo "Invalid request method.";
}
?>
