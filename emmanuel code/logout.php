<!-- PHP script for user logout -->
<?php
session_start();
session_destroy();
header("Location: index.html");
exit();
?>
