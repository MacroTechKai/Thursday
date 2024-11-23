<?php
require_once('database.php');
include "headerEm.php";
include "footerEm.php";

// Check if the database connection is established
$conn = db_connect();
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    // Sanitize input to prevent SQL injection
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Insert the form data into the database
    $sql = "INSERT INTO `contacts` (`name`, `email_address`, `message`) VALUES ('$name', '$email', '$message')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // Display a success message
        echo "<p style='color: green; text-align: center;'>Submit successfully! Thank you for your message.</p>";
    } else {
        // Display an error message
        echo "<p style='color: red; text-align: center;'>Submission failed. Please try again later.</p>";
    }
} else {
    // Redirect to the form if accessed without POST
    header("Location: contact.php");
    exit();
}

// Close the database connection
mysqli_close($conn);
?>
