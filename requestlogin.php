<?php 
    session_start();
    if(!isset($_SESSION['user'] )){
        echo '<script>alert("Vui lòng đăng nhập")</script>';
        header('location:login.php');
    }
?>