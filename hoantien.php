<?php 
    session_start();
    if(!isset($_SESSION['user'] )){
        
        header('location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./Images/icon(24x24).png">
    <link rel="stylesheet" href="/css/content.css">
    <title>Hoàn tiền</title>
</head>
<body>
    
    <?php
        require "header.php";
    ?>
    <div class="content">
        <h1>Dịch Vụ Hoàn Tiền</h1>
        <h2>Gửi yêu cầu hoàn tiền đến mail: staemsupport@gmail.com</h2>
    </div>
    <?php
        require "footer.php";
    ?>
</body>
</html>