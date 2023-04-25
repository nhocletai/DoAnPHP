<?php 
    session_start();
    if(!isset($_SESSION['user'] )){
        
        header('location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="./Images/icon(24x24).png">
    <title>Về chúng tôi</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
      integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="/css/vechungtoi.css" />
    <link rel="stylesheet" href="/css/content.css" />
  </head>
  <body>
    <?php
        require "header.php";
    ?>
    <div class="content">
      <!-- Danh -->
      <div class="card">
        <div class="card__img">
          <img src="/Images/danh.jpg" alt="" class="zoom__img"/>
        </div>
        <h2>Thành Danh</h2>
        <p>Sinh viên Khoa Công nghệ Thông tin</p>
        <p>Trường Cao Đẳng Lý Tự Trọng</p>
        <div class="card__social">
          <a target="_black" href="https://www.facebook.com/profile.php?id=100044750296043">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a target="_black" href="https://www.instagram.com/danh13012005/">
            <i class="fab fa-instagram"></i>
          </a>
          <a target="_black" href="https://www.tiktok.com/@danhnguyen3694s">
            <i class="fab fa-tiktok"></i>
          </a>
          
        </div>
        
      </div>

      <!-- Dat -->
      <div class="card">
        <div class="card__img">
          <img src="/Images/dat.JPG" alt="" class="zoom__img"/>
        </div>
        <h2>Liên Đạt</h2>
        <p>Sinh viên Khoa Công nghệ Thông tin</p>
        <p>Trường Cao Đẳng Lý Tự Trọng</p>
        <div class="card__social">
          <a target="_black" href="https://www.facebook.com/profile.php?id=100084306187658">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a target="_black" href="https://www.instagram.com/d.atlien/">
            <i class="fab fa-instagram"></i>
          </a>
          <a target="_black" href="https://www.tiktok.com/@datgacon2511">
            <i class="fab fa-tiktok"></i>
          </a>
          
        </div>
        
      </div>

      <!-- Tai -->
      <div class="card">
        <div class="card__img">
          <img src="/Images/tai.jpg" alt="" class="zoom__img"/>
        </div>
        <h2>Minh Tài</h2>
        <p>Sinh viên Khoa Công nghệ Thông tin</p>
        <p>Trường Cao Đẳng Lý Tự Trọng</p>
        <div class="card__social">
          <a target="_black" href="https://www.facebook.com/minh.tai.2509">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a target="_black" href="https://www.instagram.com/nhocletai/">
            <i class="fab fa-instagram"></i>
          </a>
          <a target="_black" href="https://www.tiktok.com/@bannho.bae">
            <i class="fab fa-tiktok"></i>
          </a>
          
        </div>
        
      </div>
    </div>
    <?php
        require "footer.php";
    ?>
  </body>
  
</html>
