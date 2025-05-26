<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form values and sanitize
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars(trim($_POST["phone"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    // Recipient email (CHANGE THIS to your actual email address)
    $to = "bundimunenecharles6206@gmail.com";
    
    // Email subject and body
    $subject = "New Contact Form Submission from $name";
    $body = "You received a new message:\n\n".
            "Name: $name\n".
            "Email: $email\n".
            "Phone: $phone\n\n".
            "Message:\n$message";

    $headers = "From: $email\r\nReply-To: $email";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Something went wrong. Please try again later.";
    }
} else {
    echo "Invalid request method.";
}
?>
