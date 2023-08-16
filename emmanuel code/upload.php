<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// ... handle video upload form submission ...


<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $videoTitle = $_POST['videoTitle'];
    $videoDescription = $_POST['videoDescription'];
    
    $targetDirectory = "uploads/";
    $targetFile = $targetDirectory . basename($_FILES["videoFile"]["name"]);
    $uploadOk = 1;
    $videoFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    
    // Check if video file is a valid format
    if ($videoFileType !== "mp4" && $videoFileType !== "avi" && $videoFileType !== "mov") {
        echo "Sorry, only MP4, AVI, and MOV files are allowed.";
        $uploadOk = 0;
    }
    
    // Check if upload was successful
    if ($uploadOk === 0) {
        echo "Sorry, your video was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["videoFile"]["tmp_name"], $targetFile)) {
            echo "The video file " . basename($_FILES["videoFile"]["name"]) . " has been uploaded.";
            // Here you can save the video details (title, description) to a database
        } else {
            echo "Sorry, there was an error uploading your video.";
        }
    }
}
?>
