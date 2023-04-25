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
    <title>Dịch Vụ Thanh Toán</title>
    
</head>
<body>

     <?php
        require "header.php";
    ?>
    <div class="content">
    <h1>Dịch Vụ Thanh Toán Của Staem bao gồm :</h1>
    <h2 style="text-align: center;"><img src="/Images/momo/MoMo_Logo.png" width="50px" > <a href="napthemomo.php"></a>
    <img src="/Images/atm/Atm.png" width="50px"> <a href="napthemomo.php"></a>
    <img src="/Images/QRpay/QRpay.png" width="50px"> <a href="napthemomo.php"></a>
    </h2>
    </div>
    <?php
        require "footer.php";
    ?>
    
</body>
</html>