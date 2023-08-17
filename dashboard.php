<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php'); // Redirect to the login page if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Dashboard - Your Video Sharing Website</title>
</head>
<body>

<header>
            <h1>screenscape</h1>
            
</header>

<main class="main-content">
    <section class="dashboard-section">
        <h2>Welcome to Your Dashboard, <?php echo $_SESSION['username']; ?>!</h2>
        <p>This is where you can manage your profile, upload videos, and interact with the community.</p>
        
        <a href="welcome.php">Visit the Welcome Page</a>
    </section>
</main>

<footer>
<nav>
                <ul>
                    <li><a href="contact.html"> <h3>contact us</a><h3></li>
                </ul>
            <nav><nav>
                <ul>
                    <li><a href="about.html"> <h3>about us</a><h3></li>
                </ul>
            <nav>
        <p>&copy; 2023 screenscape</p>
</footer>

</body>
</html>
