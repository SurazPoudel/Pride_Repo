<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form inputs
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $project = htmlspecialchars($_POST['project']);
    $message = htmlspecialchars($_POST['message']);

    // Your email address where you want to receive the email
    $to = "office@pride.info.np";
    $subject = "New Contact Form Submission: $project";

    // Construct the email body
    $body = "You have received a new message from your website contact form.\n\n".
            "Here are the details:\n".
            "Name: $name\n".
            "Email: $email\n".
            "Project: $project\n\n".
            "Message:\n$message";

    // Email headers
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message. Please try again later.";
    }
} else {
    echo "Invalid request method.";
}
?>
