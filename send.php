<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "arthur.vander.beken@gmail.com";
    $subject = "New contact form message from $name";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    $headers = "From: $email";

    mail($to, $subject, $body, $headers);

    echo "Thanks! Your message has been sent.";
}
?>
