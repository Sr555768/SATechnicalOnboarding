<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Send email
    $to = "shahzalrehman0302@gmail.com";
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    $full_message = "Name: $first_name $last_name\n";
    $full_message .= "Phone: $phone\n";
    $full_message .= "Email: $email\n\n";
    $full_message .= "Message:\n$message";

    mail($to, $subject, $full_message, $headers);

    // Optionally, you can redirect the user to a thank you page
    header("Location: thank_you.html");
    exit();
}
?>
