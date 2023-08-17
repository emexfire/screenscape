<?php
// Retrieve user inputs
$username = $_POST['username'];
$password = $_POST['password'];

// Your authentication logic (e.g., check credentials against a database)
if ($username === 'your_username' && $password === 'your_password') {
    // Successful login
    session_start();
    $_SESSION['username'] = $username;
    header('Location: dashboard.php'); // Redirect to the user's dashboard
    exit();
} else {
    // Failed login
    header('Location: login.php?error=1'); // Redirect back to the login page with an error message
    exit();
}
?>

