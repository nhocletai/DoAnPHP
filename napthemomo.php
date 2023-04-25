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
    <title>Nạp tiền</title>
</head>
<body>

    <?php
        require "header.php";
    ?>
    <div class="content">
        <h1>Hướng Dẫn Nạp Tiền  </h1>
        <div class="momo">
            <h2>Thanh Toán Bằng Momo <img src="/Images/momo/MoMo_Logo.png" width="50px"></h2>
            <h3>Bước 1: Vào Ứng Dụng Momo, Sau Đó Ấn Vào Phần Quét Mã Và Nhập Tài Khoản, Số Tiền Cần Nạp.</h3>
            <p><img src="/Images/momo/buoc1.png" width="300px"></p>
            <h3>Bước 2: Sau Đó Quét Mã Và Chờ Kết Quả.</h3>
            <p><img src="/Images/momo/buoc2.PNG" width="400px"></p>
        </div>

        <div class="atm">
            <h2>Thanh Toán Bằng ATM <img src="/Images/atm/Atm.png" width="50px"></h2>
            <h3>Bước 1: Vào Ứng Dụng Thanh Toán Ngân Hàng, Sau Đó Ấn Vào Chuyển Tiền.</h3>
            <p><img src="/Images/atm/buoc1.PNG" style="margin:auto" width="300px"></p>
            <h3>Bước 2: Nhập Tài Khoản, Số Tiền Cần Nạp, Nhập Nội Dung</h3>
            <p><img src="/Images/atm/buoc2.PNG" width="300px"></p>
        </div> 
        
        <div class="qrpay"> 
            <h2>Thanh Toán Bằng QR pay <img src="/Images/QRpay/QRpay.png" width="50px"></h2>
            <h3>Bước 1:     </h3>
            <p><img src="/Images/QRpay/buoc1.png" width="300px"></p>
            <h3>Bước 2:   </h3>
            <p><img src="/Images/QRpay/buoc2.png" width="300px"></p>
        </div>    
    </div>
    <?php
        require "footer.php";
    ?>
</body>
</html>