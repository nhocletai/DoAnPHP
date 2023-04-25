<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="/css/header.css">
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <meta charset="utf-8">
    
    
  </head>
    <style>
    .icon-ion{
      margin-right: 1px;
    }
    .block{
                  background-color: #24262b;
                  width: 100%;
                  height: 150px;
    }
    </style>
  <body>
  
  <header>
  <a href="/index.php" style="cursor: pointer"><img src="/Images/logo(100x50).png " class="logo"></a>
  <nav class="navbar">
      <a href="/index.php"><ion-icon name="home-outline"></ion-icon></ion-icon>Trang chủ</a>
      <a href="/gioithieu.php"><ion-icon name="bookmark-outline" class="icon-ion"></ion-icon>Giới thiệu</a>
      <a href="">Xin chào - <?php echo $_SESSION['user'];?></a>
      
  </nav>
 <div class="icons">
      <a href="/admincp.php" class="display"><ion-icon name="cog-outline" ></ion-icon></a>
      <?php 

        if($_SESSION['role'] != 1) { 
            echo '<style>.display { display:none;}</style>';
          }
        
      ?>
     <a href="/cuahang.php" class="fas fa-shopping-cart"></a>
     <a href="/taikhoan.php" class= "fas fa-user"></a>
     <a href="/logout.php"><ion-icon name="log-out-outline"></ion-icon></a>
  </div>
  </header>
  </body>
</html>
