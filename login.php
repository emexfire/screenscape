<!-- PHP script for user login -->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process user login form data and authenticate user
}
?>
<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['user_id'])) {
    header("Location: upload.php");
    exit();
}

// ... handle login form submission and authentication ...

// If login is successful, set the user session
$_SESSION['user_id'] = $user_id; // Store user ID after successful login
header("Location: upload.php");
exit();
?>
