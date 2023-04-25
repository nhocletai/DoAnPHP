<?php 
        session_start();
        if(!isset($_SESSION['user'] )){
            
            header('location:login.php');
        }
    require "config.php";
        // Check if the delete form has been submitted
    if (isset($_POST['submituser'])) {
        // Get the 'id' of the row to be deleted
        $id = $_POST['id'];

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
        $password = $_POST['password'];

        $sql = "SELECT * FROM user WHERE id = '$id' ";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        //nếu có tài khoản thì tiếp tục
        if(mysqli_num_rows($result) > 0) {
            
            $sql = "UPDATE user SET username = '$username',
                                    password = '$password',
                                    role = '$role',
                                    email    = '$email',
                                    sdt      = '$sdt',
                                    cccd     = '$cccd',
                                    gioitinh = '$gioitinh',
                                    thanhpho = '$thanhpho',
                                    quan     = '$quan',
                                    phuong   = '$phuong',
                                    sonha    = '$sonha' WHERE username = '$username'";
            mysqli_query($conn,$sql);
           
            
            echo "<script>alert('Sửa thông tin ID[$id] Tài khoản: $username  thành công !')</script>";
            
        }
        
    } 

?>
<style>
   a {
     display: block;
     margin-top: 10px;
     margin-left: auto; 
     padding: 10px 20px;
     background-color: #007bff;
     color: #fff;
     text-align: center;
     text-decoration: none;
     border: none;
     border-radius: 3px;
     cursor: pointer;
}


</style>
<link rel="stylesheet" href="/css/taikhoan.css">
<div class='thongtinnguoidung'>
            
            <form action='' method='post'>
                <div class='text'>Thông tin người dùng</div>
                            <div class='input-group'>
                                <p>ID</p>
                                <input required='' type='text' id='id' name='id' autocomplete='off' class='input' placeholder='ID' readonly>
                                
                            </div>
                            <div class='input-group'>
                                <p>Username</p>
                                <input required='' type='text' id='username' name='username' autocomplete='off' class='input' placeholder='Tên đăng nhập' readonly>
                                
                            </div>
                            <div class='input-group'>
                                <p>Email</p>
                                <input required='' type='text' id='email' name='email' autocomplete='off' class='input' placeholder='Email'>
                                
                            </div>
                            <div class='input-group'>
                                <p>Password</p>
                                <input required='' type='text' id='password' name='password' autocomplete='off' class='input' placeholder='Mật khẩu'>
                                
                            </div>
                            <div class='input-group'>
                                <p>Role</p>
                                <input required='' type='text' id='role' name='role' autocomplete='off' class='input' placeholder='Role'>
                                
                            </div>
                            <div class='input-group'>
                                <p>SDT</p>
                                <input required='' type='text' id='sdt' name='sdt' autocomplete='off' class='input' placeholder='Số điện thoại'>
                                
                            </div>
                            <div class='input-group'>
                                <p>CCCD/CMND</p>
                                <input required='' type='text' id='cccd' name='cccd' autocomplete='off' class='input' placeholder='CCCD/CMND'>
                                
                            </div>
                            <div class='input-group'>
                                <p>Giới tính</p>
                                <input required='' type='text' id='gioitinh' name='gioitinh' autocomplete='off' class='input' placeholder='Giới tính'>
                                
                            </div>

                            <div class='input-group'>
                                <p>Thành phố</p>
                                <input required='' type='text' id='thanhpho' name='thanhpho' autocomplete='off' class='input' placeholder='Thành phố/Tỉnh'>
                                
                            </div>
                            <div class='input-group'>
                                <p>Quận/Huyện</p>
                                <input required='' type='text' id='quan' name='quan' autocomplete='off' class='input' placeholder='Quận/Huyện'>
                                
                            </div>
                            <div class='input-group'>
                                <p>Phường/Xã</p>
                                <input required='' type='text' id='phuong' name='phuong' autocomplete='off' class='input' placeholder='Phường/Xã'>
                                
                            </div>
                            <div class='input-group'>
                                <p>Số nhà/Đường</p>
                                <input required='' type='text' id='sonha' name='sonha' autocomplete='off' class='input' placeholder='Số nhà/Đường'>
                                

                    <button name='submituser' type='submit'>Lưu thay đổi</button>

                    <a href='/admincp.php'>Quay về AdminCP</a>
            </form>
        </div>
    </div>

    <?php 
        //lấy thông tin người dùng từ database
        $id = $_POST['id'];
        $sql = "SELECT * FROM user WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        $password = $row['password']; //Mật khẩu
        $username = $row['username']; //Tên đăng nhập 
        $role = $row['role']; //Role
        $email = $row['email']; //Email
        $sdt = $row['sdt']; //SDT
        $cccd = $row['cccd']; //CCCD
        $gioitinh = $row['gioitinh']; //Gioi tinh
        $thanhpho = $row['thanhpho']; //Thanh pho
        $quan = $row['quan']; //Quan
        $phuong = $row['phuong']; //Phuong
        $sonha = $row['sonha']; //So nha


        echo "<script> document.getElementById('role').value = '$role';
            </script>";
        echo "<script> document.getElementById('id').value = '$id';
            </script>";
        echo "<script> document.getElementById('password').value = '$password';
            </script>";
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