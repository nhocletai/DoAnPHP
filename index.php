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
    <script src="/js/script.js" defer></script>
    <link rel="icon" href="./Images/icon(24x24).png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>Staem</title>
</head>
<body>
    <?php
        require "header.php";
    ?>

    <div id="youtube">
        <div class="tittle">HELLOO</div>
        <iframe src="https://www.youtube.com/embed/FpkSPT8lZeA" width="680" height="480" frameborder="0" allowfullscreen></iframe>
    </div>
    <div id="content">
        <div class="wrapper">
        <i id="left" class="fa-solid fa-angle-left"></i>
        <div class="carousel">
            <img src="/Images/danhgia/1.png" alt="img" draggable="false">
            <img src="/Images/danhgia/2.png" alt="img" draggable="false">
            <img src="/Images/danhgia/3.png" alt="img" draggable="false">
            <img src="/Images/danhgia/4.png" alt="img" draggable="false">
            <img src="/Images/danhgia/5.png" alt="img" draggable="false">
        </div>
        <i id="right" class="fa-solid fa-angle-right"></i>
        </div>
    </div>
    <?php
        require "footer.php";
    ?>
    
</body>
</html>