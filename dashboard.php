<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login_process.php'); // Redirect to the login page if not logged in
    exit();
}

</head>
<body>
    <header>
        <header>
            <h1><img src="images/WhatsApp Image 2023-08-14 at 11.07.22.png" alt="Logo"width="100" height="70">
            
            <!-- User account dropdown menu -->
            <div class="dropdown user-account-menu">
                <a class="dropdown-toggle" href="#" role="button" id="userAccountDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    User Account
                </a>
                <div class="dropdown-menu" aria-labelledby="userAccountDropdown">
                    <a class="dropdown-item" href="#">Profile</a>
                    <a class="dropdown-item" href="#">Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Log Out</a>
                </div>
            </div>
        </header>
        
        <style>
            
        
            /* Styles for the logo */
            header img {
                margin-right: 1019px; 
                margin-bottom: -17%;
            }
        </style>
        
        
        <header>
            <h1>screenscape</h1>
            
        </header>
        <main class="main-content">
            <section class="intro-section">
                <h2>Welcome to screenscape!</h2>
                <p>Share your videos and connect with others.</p>
                <p><a href="signup.html">Sign Up</a> or <a href="login.html">Log In</a></p>
            </section>
            <section class="intro-section">
                <!-- Display information or sign-up/login options -->
    </header>
    
    <main>
        <section class="video-upload">
            <nav>
                <ul>
                    <li><a href="upload.html"> <h2>Upload Video</a><h2></li>
                </ul>
            <nav>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <!-- ... your form elements ... -->
            </form>
            
        </section>
        
        <section class="video-list">
            <nav>
                <ul>
                    <li><a href="latest videos.html"> <h2>latest videos</a><h2></li>
                </ul>
            <nav>
            <ul class="video-items">
                <li class="video-item">
                    <a href="video_url_1"><img src="thumbnail_url_1" alt="Video Thumbnail"></a>
                    <h3><a href="video_url_1">Video Title 1</a></h3>
                    <p>Uploaded by User 1</p>
                </li>
                <li class="video-item">
                    <a href="video_url_2"><img src="thumbnail_url_2" alt="Video Thumbnail"></a>
                    <h3><a href="video_url_2">Video Title 2</a></h3>
                    <p>Uploaded by User 2</p>
                </li>
                <!-- Add more video items here -->
            </ul>
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
