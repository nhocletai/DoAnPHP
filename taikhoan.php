<?php 
    session_start();
    if(!isset($_SESSION['user'] )){
        
        header('location:login.php');
    }
    // đổi mật khẩu
    if(isset($_POST["submitpass"])) {
        require "config.php";
        $username = $_SESSION['user'];
        $oldpass = $_POST['oldpass'];
        $newpass = $_POST['newpass'];
        $renewpass = $_POST['renewpass'];

        $sql = "SELECT * FROM user WHERE username = '$username' ";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        //nếu có tài khoản thì tiếp tục
        if(mysqli_num_rows($result) > 0) {
            //nếu mật khẩu cũ nhập vào = mật khẩu có trong database thì tiếp tục
            //$oldpass là mật khẩu cũ nhập vào
            //$row['password'] là mật khẩu có trong database
            if($oldpass == $row['password']) {
                //nếu mật khẩu mới bằng mật khẩu nhập lại thì tiếp tục 
                if($newpass == $renewpass) {
                    $sql = "UPDATE user SET password = '$newpass' WHERE username = '$username'";
                    mysqli_query($conn,$sql);
                    echo '<script>alert("Thay đổi mật khẩu thành công")</script>';
                }
                else {
                    echo '<script>alert("Mật khẩu nhập lại không đúng")</script>';
                }
            }
            else {
                echo '<script>alert("Mật khẩu cũ không đúng")</script>';
            }
            
        }
        
    }
    
    
    
    // thay đổi thông tin tài khoản
    if(isset($_POST["submituser"])) {
        require "config.php";
        
        //lấy thông tin người dùng từ database
        $username = $_POST['username']; //Tên đăng nhập 
        $role = $_POST['role']; //Role
        $email = $_POST['email']; //Email
        $sdt = $_POST['sdt']; //SDT
        $cccd = $_POST['cccd']; //CCCD
        $gioitinh = $_POST['gioitinh']; //Gioi tinh
        $thanhpho = $_POST['thanhpho']; //Thanh pho
        $quan = $_POST['quan']; //Quan
        $phuong = $_POST['phuong']; //Phuong
        $sonha = $_POST['sonha']; //So nha

        $sql = "SELECT * FROM user WHERE username = '$username' ";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        //nếu có tài khoản thì tiếp tục
        if(mysqli_num_rows($result) > 0) {
            
            $sql = "UPDATE user SET email    = '$email',
                                    sdt      = '$sdt',
                                    cccd     = '$cccd',
                                    gioitinh = '$gioitinh',
                                    thanhpho = '$thanhpho',
                                    quan     = '$quan',
                                    phuong   = '$phuong',
                                    sonha    = '$sonha' WHERE username = '$username'";
            mysqli_query($conn,$sql);
            echo "<script>alert('Cập nhật thông tin thành công. Vui lòng đăng nhập lại');</script>";
            
            
            
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./Images/icon(24x24).png">
    <link rel="stylesheet" href="/css/taikhoan.css">
    <title>Tài khoản</title>
</head>
<body>
    <?php
        require "header.php";
    ?>
    <div class="content_taikhoan">
        
        <div class="doimatkhau">
            <form action="" method="post">
                <div class="text">Đổi mật khẩu</div>
                    <div class="input-group">
                        <input required="" type="password" name="oldpass" autocomplete="off" class="input" placeholder="Mật khẩu cũ">
                        
                    </div>
                    <div class="input-group">
                        <input required="" type="password" name="newpass" autocomplete="off" class="input" placeholder="Mật khẩu mới">
                        
                    </div>
                    <div class="input-group">
                        <input required="" type="password" name="renewpass" autocomplete="off" class="input" placeholder="Xác nhận lại mật khẩu">
                        
                    </div>
                    <button name="submitpass" type="submit">Lưu thay đổi</button>
            </form>
        </div>
        
        <div class="thongtinnguoidung">
            <form action="" method="post">
                <div class="text">Thông tin người dùng</div>

                            <div class="input-group">
                                <input required="" type="text" id="username" name="username" autocomplete="off" class="input" placeholder="Tên đăng nhập" readonly>
                                
                            </div>
                            <div class="input-group">
                                <input required="" type="text" id="email" name="email" autocomplete="off" class="input" placeholder="Email" >
                                
                            </div>
                            <div class="input-group">
                                <input required="" type="text" id="sdt" name="sdt" autocomplete="off" class="input" placeholder="Số điện thoại">
                                
                            </div>
                            <div class="input-group">
                                <input required="" type="text" id="cccd" name="cccd" autocomplete="off" class="input" placeholder="CCCD/CMND">
                                
                            </div>
                            <div class="input-group">
                                <input required="" type="text" id="gioitinh" name="gioitinh" autocomplete="off" class="input" placeholder="Giới tính">
                                
                            </div>

                            <div class="input-group">
                                <input required="" type="text" id="thanhpho" name="thanhpho" autocomplete="off" class="input" placeholder="Thành phố/Tỉnh">
                                <label class="user-label"></label>
                            </div>
                            <div class="input-group">
                                <input required="" type="text" id="quan" name="quan" autocomplete="off" class="input" placeholder="Quận/Huyện">
                                <label class="user-label"></label>
                            </div>
                            <div class="input-group">
                                <input required="" type="text" id="phuong" name="phuong" autocomplete="off" class="input" placeholder="Phường/Xã">
                                <label class="user-label"></label>
                            </div>
                            <div class="input-group">
                                <input required="" type="text" id="sonha" name="sonha" autocomplete="off" class="input" placeholder="Số nhà/Đường">
                                <label class="user-label"></label>

                    <button name="submituser" type="submit">Lưu thay đổi</button>
            </form>
        </div>
    </div>

    <?php 
        //lấy thông tin người dùng từ database
        $username = $_SESSION['user']; //Tên đăng nhập 
        $role = $_SESSION['role']; //Role
        $email = $_SESSION['email']; //Email
        $sdt = $_SESSION['sdt']; //SDT
        $cccd = $_SESSION['cccd']; //CCCD
        $gioitinh = $_SESSION['gioitinh']; //Gioi tinh
        $thanhpho = $_SESSION['thanhpho']; //Thanh pho
        $quan = $_SESSION['quan']; //Quan
        $phuong = $_SESSION['phuong']; //Phuong
        $sonha = $_SESSION['sonha']; //So nha

        
        echo "<script> document.getElementById('username').value = '$username';
            </script>";
        echo "<script> document.getElementById('email').value = '$email';
            </script>";
        echo "<script> document.getElementById('sdt').value = '$sdt';
            </script>";
        echo "<script> document.getElementById('cccd').value = '$cccd';
            </script>";
        echo "<script> document.getElementById('gioitinh').value = '$gioitinh';
            </script>";
        echo "<script> document.getElementById('thanhpho').value = '$thanhpho';
            </script>";
        echo "<script> document.getElementById('quan').value = '$quan';
            </script>";
        echo "<script> document.getElementById('phuong').value = '$phuong';
            </script>";
        echo "<script> document.getElementById('sonha').value = '$sonha';
            </script>";
    ?>
</body>
</html>