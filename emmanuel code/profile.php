<!-- User profile page after successful login -->
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: index.html");
    exit();
}

$user_id = $_SESSION['user_id'];
// Retrieve user information from the database based on $user_id
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... head content ... -->
</head>
<body>
    <header>
        <!-- ... header content ... -->
        <nav>
            <ul>
                <li><a href="profile.php">My Profile</a></li>
                <li><a href="upload.php">Upload Video</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    
    <main class="main-content">
        <section class="user-profile">
            <!-- Display user information and uploaded videos -->
        </section>
    </main>

    <footer>
        <!-- ... footer content ... -->
    </footer>
</body>
</html>
