<?php
    session_start();
    if (!isset($_SESSION['email'])) {
        header('Location:login.php');
    }else{
        $role =$_SESSION["role"];
        if(!isset($_SESSION['username']) || $role=="admin"){
          header('Location:admin/index.php');
        }
    }

?>