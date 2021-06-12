<?php
session_start();
header('Location:../logout.php');
session_destroy();
?>