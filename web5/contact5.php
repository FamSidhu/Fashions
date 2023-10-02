<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["Name"];
    $number = $_POST["Number"];
    $area = $_POST["Area"];
    $email = $_POST["Email"];

    // Your email address where you want to receive the form data
    $to = "your-email@example.com"; // Replace with your actual email address

    // Subject of the email
    $subject = "Contact Form Submission";

    // Email message
    $message = "Name: " . $name . "\n";
    $message .= "Number: " . $number . "\n";
    $message .= "Area: " . $area . "\n";
    $message .= "Email: " . $email . "\n";

    // Send email
    if (mail($to, $subject, $message)) {
        echo "Thank you for your message. We will get back to you soon!";
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
} else {
    echo "This script is meant to handle POST requests only.";
}
$servername = "localhost";
$username = "root";
$password = "fam987";
$database_name="contact";
$conn = mysqli_connect($servername, $username, $password,$database_name);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful";
}
?>
