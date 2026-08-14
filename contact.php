<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "info@pantherempire.co.ke"; // CHANGE THIS

    $subject = "New Contact Form Message - Panther Empire";

    $body = "
New message from website:

Name: $name
Email: $email
Message:
$message
";

    
	$headers = "From: info@pantherempire.co.ke\r\n";
	$headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
    header("Location: contact.html?status=success");
    exit();
	} else {
    header("Location: contact.html?status=error");
    exit();
}

} else {
    echo "Invalid request.";
}
?>
