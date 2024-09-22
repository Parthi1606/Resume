<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    echo "<h2>Thank you, $name, for submitting the form!</h2>";
    echo "<p>We have received your message and will get back to you at <strong>$email</strong> soon.</p>";
    echo "<p>Your message: $message</p>";
} else {

    header("Location: contact_form.html");
    exit();
}
?>
