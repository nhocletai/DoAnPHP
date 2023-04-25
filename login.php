<?php 
    error_reporting(E_ALL & ~E_NOTICE);

    session_start();
    if(isset($_SESSION['user'])) {
        header('location: /index.php');
    }
    if(isset($_POST["submit"])) {
        session_start();
        require "config.php";

        $username = $_POST['username'];
        $pass = $_POST['pass'];
        
        $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$pass'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        //Nếu email và password hợp lệ cho vào website
        if(mysqli_num_rows($result) > 0) {
            //Lấy thông tin từ database
            $_SESSION['user'] = $username; //Tên đăng nhập
            $_SESSION['role'] = $row['role']; //Role
            $_SESSION['email'] = $row['email'];
            $_SESSION['sdt'] = $row['sdt'];
            $_SESSION['cccd'] = $row['cccd'];
            $_SESSION['gioitinh'] = $row['gioitinh'];
            $_SESSION['thanhpho'] = $row['thanhpho'];
            $_SESSION['quan'] = $row['quan'];
            $_SESSION['phuong'] = $row['phuong'];
            $_SESSION['sonha'] = $row['sonha'];
            //
            header('location: cuahang.php');
            
        }
        else{
            $showThongBao = true;
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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="icon" href="./Images/icon(24x24).png">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Đăng nhập</title>
</head>
<body>
    <div class='thongbao_container' style='<?php echo ($showThongBao ? "display: block;" : "display: none;"); ?>'>
        <div class='thongbao'>
            <div class='noidung_thongbao'>
                <ion-icon name='alert-circle-outline'></ion-icon>
                <span>&nbsp;&nbsp;Tên đăng nhập hoặc mật khẩu không đúng !</span>
            </div>
        </div>
    </div>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="" method="post">
                    <h2>ĐĂNG NHẬP</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="text" required name="username">
                        <label for="">Tên đăng nhập</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" required name="pass">
                        <label for="">Mật khẩu</label>
                    </div>
                    <div class="forget">
                        <label for=""><a href="404.php">Quên mật khẩu?</a></label>
                      
                    </div>
                    <button type="submit" name="submit" >Đăng nhập</button>
                    <div class="register">
                        <p>Không có tài khoản? <a href="register.php">Đăng ký ngay!</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
</body>
</html>