<?php
// admin.php

// Define the hardcoded admin credentials
$adminUsername = "admin";
$adminPassword = "password123";

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Verify admin credentials
    if ($username === $adminUsername && $password === $adminPassword) {
        // Successful login
        // You can redirect to the event management page or display the event management UI here.
        echo "Login successful. You can now manage events. <a href='manage_events.html'>Manage Events</a>";
    } else {
        // Invalid credentials
        echo "Invalid username or password. Please try again.";
    }
}
?>