<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "furkan.ercan@mail.mcgill.ca"; // Replace with your actual email address
    $subject = "New Contact Form Submission";

    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
}
?>
