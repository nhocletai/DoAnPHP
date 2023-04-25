<?php 
    if(isset($_POST["submit"])) {
        require "config.php";
        $username = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $repass = $_POST['repass'];

        $sql = "SELECT * FROM user WHERE username = '$username' ";
        $old = mysqli_query($conn,$sql);

        if($pass != $repass) {
            $showThongBaoPass = true;
        }
        else if(mysqli_num_rows($old) > 0) {
            $showThongBaoUsername = true;
        }
        else {
            
            $sql = "INSERT INTO user (username,email,password) VALUES ('$username','$email','$pass')";
            mysqli_query($conn,$sql);
            header('location:login.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/login_register.css">
    <link rel="stylesheet" href="/css/thongbao.css">
    <link rel="icon" href="./Images/icon(24x24).png">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Đăng ký</title>
</head>
<body>
    <div class='thongbao_container' style='<?php echo ($showThongBaoPass ? "display: block;" : "display: none;"); ?>'>
        <div class='thongbao'>
            <div class='noidung_thongbao'>
                <ion-icon name='alert-circle-outline'></ion-icon>
                <span>&nbsp;&nbsp;Password nhập lại không đúng !</span>
            </div>
        </div>
    </div>
    <div class='thongbao_container' style='<?php echo ($showThongBaoUsername ? "display: block;" : "display: none;"); ?>'>
        <div class='thongbao'>
            <div class='noidung_thongbao'>
                <ion-icon name='alert-circle-outline'></ion-icon>
                <span>&nbsp;&nbsp;Tên đăng nhập đã tồn tại !</span>
            </div>
        </div>
    </div>
    <section>
        <div class="form-box" style="height: 550px;">
            <div class="form-value">
                <form action="" method="post">
                    <h2>ĐĂNG KÝ</h2>

                    <div class="inputbox">
                        <ion-icon name="person-circle-outline"></ion-icon>
                        <input type="text" required name="username">
                        <label for="">Tên đăng nhập</label>
                    </div>

                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email"  name="email">
                        <label for="">Email</label>
                    </div>

                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" required name="pass">
                        <label for="">Mật khẩu</label>
                    </div>

                    <div class="inputbox">
                        <input type="password" required name="repass">
                        <label for="">Nhập lại mật khẩu</label>
                    </div>

                    <button type="submit" name="submit">Đăng ký</button>

                    <div class="register">
                        <p><a href="login.php">Đã có tài khoản?</a></p>
                    </div>
                    
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
</body>
</html>