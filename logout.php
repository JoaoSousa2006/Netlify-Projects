<?php
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    header('location:login.php');
?>