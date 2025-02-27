<?php
header('Content-Type: text/plain');

// Get the raw POST data
$data = file_get_contents('php://input');
$formData = json_decode($data, true);

// Extract the user's response
$answer = $formData['answer'];

// Set the recipient email address
$to = "info@pmwelase.co.za";

// Set email subject
$subject = "New Response: Will You Let Me See Beneath Your Beautiful?";

// Set email message
$message = "You have received a new response:\n\n";
$message .= "Answer: $answer\n";

// Set email headers
$headers = "From: Valentine's Day Surprise <noreply@example.com>\r\n";
$headers .= "Reply-To: noreply@example.com\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Send the email
if (mail($to, $subject, $message, $headers)) {
    echo "Thank you! Your response has been sent.";
} else {
    echo "Oops! Something went wrong and we couldn't send your response.";
}
?>