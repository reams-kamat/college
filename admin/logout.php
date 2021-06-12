<?php
// Initialize the session
session_start();
 unset($_SESSION["email"]);

unset($_SESSION["username"]);

 // Redirect to login page
header("location: index.php");
// Destroy the session.
session_destroy();
 

exit;
?>