<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullName = $_POST['fullName'] ?? '';
    $email    = $_POST['email'] ?? '';
    $phone    = $_POST['phone'] ?? '';
    $subject  = $_POST['subject'] ?? '';
    $message  = $_POST['message'] ?? '';

    // Recipient email
    $to = "athithyanadhi00@gmail.com";  // replace with your own address

    // Email subject
    $emailSubject = "Vizzac Laser Contact: $subject";

    // Email body
    $body  = "Full Name: $fullName\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Subject: $subject\n";
    $body .= "Message:\n$message\n";

    // From header (must be a valid sender on your hosting/domain)
    $headers = "From: no-reply@yourdomain.com\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $emailSubject, $body, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Sorry, something went wrong. Please try again later.";
    }
} else {
    echo "Invalid request.";
}
