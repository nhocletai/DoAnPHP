<?php 
    session_start();
    if(isset($_SESSION['user'])) {
        unset($_SESSION['user']);
    }
    echo '<script>alert("Đăng xuất thành công")</script>';
    header('location:login.php');
?>