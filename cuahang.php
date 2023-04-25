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
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="/css/cuahang.css">
    <link rel="icon" href="./Images/icon(24x24).png">
    <title>Cửa hàng</title>
</head>
<body>
<?php
        require "header.php";
    ?>

<h1 class="content">Game Sắp Ra Mắt</h1>
  <section class="swiper mySwiper">
      <div class="swiper-wrapper">




            <div class="card swiper-slide">

                <div class="card">

                    <div class="imgBox">
                        <img src="/Images/games/aocuoigiay4.jpg" alt="" class="mouse">
                    </div>

                    <div class="contentBox">
                      <h3>Áo cưới giấy 4</h3>
                      <h2 class="price">X0.<small>000</small> VNĐ</h2>
                      <button href="" class="coming">Chưa ra mắt</button>
                    </div>
                </div>
            </div>
      


            <div class="card swiper-slide">

                  <div class="card">

                      <div class="imgBox">
                        <img src="/Images/games/gta6.jpg" alt="" class="mouse">
                      </div>

                      <div class="contentBox">
                        <h3>Gta VI</h3>
                        <h2 class="price">X90.<small>000</small> VNĐ</h2>
                        <button class="coming">Chưa ra mắt</button>
                      </div>
            
                  </div>
            </div>

            <div class="card swiper-slide">

                  <div class="card">

                    <div class="imgBox">
                      <img src="/Images/games/thedaybefore.jpg" alt="" class="mouse">
                    </div>

                    <div class="contentBox">
                      <h3>The Day Before</h3>
                      <h2 class="price">X220.<small>000</small> VNĐ</h2>
                      <button class="coming">Chưa ra mắt</button>
                    </div>
            
                  </div>
            </div>


            <div class="card swiper-slide">

                  <div class="card">

                    <div class="imgBox">
                      <img src="/Images/games/Ark2.jpg" alt="" class="mouse">
                    </div>

                    <div class="contentBox">
                      <h3>Ark 2</h3>
                      <h2 class="price">X95.<small>000</small> VNĐ</h2>
                      <button class="coming">Chưa ra mắt</button>
                    </div>
            
                  </div>
            </div>

            
            <div class="card swiper-slide">

                  <div class="card">

                    <div class="imgBox">
                      <img src="/Images/games/Wildhearts.png" alt="" class="mouse">
                    </div>

                    <div class="contentBox">
                      <h3>Wild Hearts</h3>
                      <h2 class="price">X99.<small>000</small> VNĐ</h2>
                      <button class="coming">Chưa ra mắt</button>
                    </div>
            
                  </div>
            </div>


            <div class="card swiper-slide">

                  <div class="card">

                    <div class="imgBox">
                      <img src="/Images/games/DeadSpace.jpg" alt="" class="mouse">
                    </div>

                    <div class="contentBox">
                      <h3>Dead Space</h3>
                      <h2 class="price">X660.<small>000</small> VNĐ</h2>
                      <button class="coming">Chưa ra mắt</button>
                    </div>
            
                  </div>
            </div>


            <div class="card swiper-slide">

                  <div class="card">

                    <div class="imgBox">
                      <img src="/Images/games/csgo2.png" alt="" class="mouse">
                    </div>

                    <div class="contentBox">
                      <h3>CSGO 2</h3>
                      <h2 class="price">X99.<small>000</small> VNĐ</h2>
                      <button class="coming">Chưa ra mắt</button>
                    </div>
            
                  </div>
            </div>





      </div>
  </section>



  <h1 class="content">Game Mới Ra</h1>
  <section class="swiper mySwiper">
      <div class="swiper-wrapper">




            <div class="card swiper-slide">
              <div class="card">

                <div class="imgBox">
                  <img src="/Images/games/son.jpg" alt="" class="mouse">
                </div>

                <div class="contentBox">
                   <h3>Sons of the forest</h3>
                   <h2 class="price">340.<small>000</small> VNĐ</h2>
                   <button class="buy">Thêm vào giỏ hàng</button>
                </div>

              </div>
                
            </div>
      


            <div class="card swiper-slide">

                <div class="card">

                  <div class="imgBox">
                      <img src="/Images/games/RE4.png" alt="" class="mouse">
                  </div>

                <div class="contentBox">
                  <h3>Resident Evil 4</h3>
                  <h2 class="price">999.<small>000</small> VNĐ</h2>
                  <button class="buy">Thêm vào giỏ hàng</button>
                </div>

              </div>
            </div>

            <div class="card swiper-slide">

                <div class="card">

                      <div class="imgBox">
                        <img src="/Images/games/hogwarts.jpg" alt="" class="mouse">
                      </div>

                  <div class="contentBox">
                        <h3>Hogwarts Legacy</h3>
                        <h2 class="price">249.<small>000</small> VNĐ</h2>
                        <button class="buy">Thêm vào giỏ hàng</button>
                  </div>

                </div>
            </div>


            <div class="card swiper-slide">

                <div class="card">

                    <div class="imgBox">
                      <img src="/Images/games/outriders.jpg" alt="" class="mouse">
                    </div>

                    <div class="contentBox">
                      <h3>Outriders</h3>
                      <h2 class="price">249.<small>000</small> VNĐ</h2>
                      <button class="buy">Thêm vào giỏ hàng</button>
                    </div>

                </div>
            </div>

            
            <div class="card swiper-slide">
              <div class="card">

                      <div class="imgBox">
                          <img src="/Images/games/DREDGE.jpg" alt="" class="mouse">
                      </div>

                      <div class="contentBox">
                          <h3>DREDGE</h3>
                          <h2 class="price">500.<small>000</small> VNĐ</h2>
                          <button class="buy">Thêm vào giỏ hàng</button>
                      </div>

                </div>
            </div>


            <div class="card swiper-slide">

                  <div class="card">

                      <div class="imgBox">
                          <img src="/Images/games/fatal.jpg" alt="" class="mouse">
                      </div>

                      <div class="contentBox">
                          <h3>Fatal frame</h3>
                          <h2 class="price">359.<small>000</small> VNĐ</h2>
                          <button class="buy">Thêm vào giỏ hàng</button>
                      </div>

                  </div>
            </div>


            <div class="card swiper-slide">

                  <div class="card">

                    <div class="imgBox">
                      <img src="/Images/games/csgo2.png" alt="" class="mouse">
                    </div>

                    <div class="contentBox">
                      <h3>CSGO 2</h3>
                      <h2 class="price">299.<small>000</small> VNĐ</h2>
                      <button class="buy">Thêm vào giỏ hàng</button>
                    </div>
            
                  </div>
            </div>





      </div>
  </section>

  

<h1 class="content">Game HOT</h1>
  <section class="swiper mySwiper">
      <div class="swiper-wrapper">




            <div class="card swiper-slide">

              <div class="card">

                    <div class="imgBox">
                      <img src="/Images/games/csgo.jpg" alt="" class="mouse">
                    </div>

                    <div class="contentBox">
                      <h3>CSGO Prime</h3>
                      <h2 class="price">340.<small>000</small> VNĐ</h2>
                      <button class="buy">Thêm vào giỏ hàng</button>
                    </div>

              </div>
                
            </div>
      


            <div class="card swiper-slide">

                <div class="card">

                        <div class="imgBox">
                          <img src="/Images/games/pubg.jpg" alt="" class="mouse">
                        </div>

                        <div class="contentBox">
                          <h3>PUBG Plus</h3>
                          <h2 class="price">249.<small>000</small> VNĐ</h2>
                          <button class="buy">Thêm vào giỏ hàng</button>
                        </div>

                </div>

            </div>


            <div class="card swiper-slide">

                <div class="card">

                        <div class="imgBox">
                          <img src="/Images/games/ForzaHorizon5.jpg" alt="" class="mouse">
                        </div>

                        <div class="contentBox">
                          <h3>Forza Horizon 5</h3>
                          <h2 class="price">800.<small>000</small> VNĐ</h2>
                          <button class="buy">Thêm vào giỏ hàng</button>
                        </div>

                </div>

            </div>


            <div class="card swiper-slide">

                <div class="card">

                    <div class="imgBox">
                      <img src="/Images/games/outriders.jpg" alt="" class="mouse">
                    </div>

                    <div class="contentBox">
                      <h3>Outriders</h3>
                      <h2 class="price">249.<small>000</small> VNĐ</h2>
                      <button class="buy">Thêm vào giỏ hàng</button>
                    </div>

                </div>
            </div>

            
            <div class="card swiper-slide">

                <div class="card">

                      <div class="imgBox">
                        <img src="/Images/games/Rust.png" alt="" class="mouse">
                      </div>

                      <div class="contentBox">
                        <h3>Rust</h3>
                        <h2 class="price">500.<small>000</small> VNĐ</h2>
                        <button class="buy">Thêm vào giỏ hàng</button>
                      </div>

                </div>

            </div>


            <div class="card swiper-slide">

              <div class="card">

                      <div class="imgBox">
                        <img src="/Images/games/Atomic_Heart.jpg" alt="" class="mouse">
                      </div>

                      <div class="contentBox">
                        <h3>Atomic Heart</h3>
                        <h2 class="price">500.<small>000</small> VNĐ</h2>
                        <button class="buy">Thêm vào giỏ hàng</button>
                      </div>

                </div>

            </div>


            <div class="card swiper-slide">

                  <div class="card">

                      <div class="imgBox">
                        <img src="/Images/games/gta5.jpg" alt="" class="mouse">
                      </div>

                      <div class="contentBox">
                        <h3>GTA V</h3>
                        <h2 class="price">359.<small>000</small> VNĐ</h2>
                        <button class="buy">Thêm vào giỏ hàng</button>
                      </div>

                  </div>

            </div>


      </div>
  </section>


<h1 class="content">Game Giải Trí</h1>
  <section class="swiper mySwiper">
      <div class="swiper-wrapper">




            <div class="card swiper-slide">

              <div class="card">

                      <div class="imgBox">
                            <img src="/Images/games/fallguys.png" alt="" class="mouse">
                      </div>

                      <div class="contentBox">
                            <h3>Fall Guys</h3>
                            <h2 class="price">189.<small>000</small> VNĐ</h2>
                            <button class="buy">Thêm vào giỏ hàng</button>
                      </div>

                </div>
                
            </div>
      


            <div class="card swiper-slide">

                <div class="card">

                        <div class="imgBox">
                          <img src="/Images/games/filthy.jpg" alt="" class="mouse">
                        </div>

                        <div class="contentBox">
                          <h3>Filthy Animals</h3>
                          <h2 class="price">110.<small>000</small> VNĐ</h2>
                          <button class="buy">Thêm vào giỏ hàng</button>
                        </div>

                </div>

            </div>


            <div class="card swiper-slide">

                <div class="card">

                      <div class="imgBox">
                        <img src="/Images/games/duck.jpg" alt="" class="mouse">
                      </div>

                      <div class="contentBox">
                        <h3>Goose Goose Duck</h3>
                        <h2 class="price">99.<small>000</small> VNĐ</h2>
                        <button class="buy">Thêm vào giỏ hàng</button>
                      </div>

                </div>

            </div>


            <div class="card swiper-slide">

                <div class="card">

                      <div class="imgBox">
                        <img src="/Images/games/WWE23.png" alt="" class="mouse">
                      </div>

                      <div class="contentBox">
                        <h3>WWE 2K23</h3>
                        <h2 class="price">999.<small>000</small> VNĐ</h2>
                        <button class="buy">Thêm vào giỏ hàng</button>
                      </div>

                  </div>
            </div>

            
            <div class="card swiper-slide">

                <div class="card">

                      <div class="imgBox">
                        <img src="/Images/games/BloonsTD6.jpg" alt="" class="mouse">
                      </div>

                      <div class="contentBox">
                        <h3>Bloons TD 6</h3>
                        <h2 class="price">199.<small>000</small> VNĐ</h2>
                        <button class="buy">Thêm vào giỏ hàng</button>
                      </div>

                </div>
               
            </div>


            <div class="card swiper-slide">

                <div class="card">

                        <div class="imgBox">
                          <img src="/Images/games/Agrou.jpg" alt="" class="mouse">
                        </div>

                        <div class="contentBox">
                          <h3>Agrou</h3>
                          <h2 class="price">69.<small>000</small> VNĐ</h2>
                          <button class="buy">Thêm vào giỏ hàng</button>
                        </div>

                </div>

            </div>


      </div>

  </section>


  <h1 class="content">Game Kinh Dị</h1>
  <section class="swiper mySwiper">
      <div class="swiper-wrapper">




            <div class="card swiper-slide">

                <div class="card">

                      <div class="imgBox">
                        <img src="/Images/games/devour.jpg" alt="" class="mouse">
                      </div>

                      <div class="contentBox">
                        <h3>Devour</h3>
                        <h2 class="price">200.<small>000</small> VNĐ</h2>
                        <button class="buy">Thêm vào giỏ hàng</button>
                      </div>

                </div>
                
            </div>
      


            <div class="card swiper-slide">

                  <div class="card">

                        <div class="imgBox">
                          <img src="/Images/games/Pacify.jpg" alt="" class="mouse">
                        </div>

                        <div class="contentBox">
                          <h3>Pacify</h3>
                          <h2 class="price">49.<small>000</small> VNĐ</h2>
                          <button class="buy">Thêm vào giỏ hàng</button>
                        </div>

                  </div>

            </div>


            <div class="card swiper-slide">

                  <div class="card">

                        <div class="imgBox">
                          <img src="/Images/games/Demonologist.jpg" alt="" class="mouse">
                        </div>

                        <div class="contentBox">
                          <h3>Demonologist</h3>
                          <h2 class="price">200.<small>000</small> VNĐ</h2>
                          <button class="buy">Thêm vào giỏ hàng</button>
                        </div>

                  </div>

            </div>


            <div class="card swiper-slide">

                  <div class="card">

                        <div class="imgBox">
                          <img src="/Images/games/thantrung.jpg" alt="" class="mouse">
                        </div>

                        <div class="contentBox">
                          <h3>Thần Trùng</h3>
                          <h2 class="price">99.<small>000</small> VNĐ</h2>
                          <button class="buy">Thêm vào giỏ hàng</button>
                        </div>

                  </div>

            </div>

            
            <div class="card swiper-slide">

                  <div class="card">

                        <div class="imgBox">
                          <img src="/Images/games/Outlast.jpg" alt="" class="mouse">
                        </div>

                        <div class="contentBox">
                          <h3>Outlast</h3>
                          <h2 class="price">99.<small>000</small> VNĐ</h2>
                          <button class="buy">Thêm vào giỏ hàng</button>
                        </div>

                  </div>
               
            </div>


            <div class="card swiper-slide">

                  <div class="card">

                        <div class="imgBox">
                          <img src="/Images/games/aocuoigiay3.jpg" alt="" class="mouse">
                        </div>

                        <div class="contentBox">
                          <h3>Áo cưới giấy 3</h3>
                          <h2 class="price">69.<small>000</small> VNĐ</h2>
                          <button class="buy">Thêm vào giỏ hàng</button>
                        </div>

                  </div>

            </div>


      </div>

  </section>






<section class="cart">
    
    <form action="">
      <table>
        <h2>Giỏ hàng</h2>
          <thead>
              <tr>
                  <th>Sản phẩm</th>
                  <th>Giá</th>
                  <th>SL</th>
                  <th>Chọn</th>
              </tr>
          </thead>
          <tbody>
              
          </tbody>
      </table>
      <div style="text-align: right;" class="price-total">
        <p style="font-weight: bold;">Tổng tiền: <span class="price">0.<small>000</small> VNĐ</span></p>
      </div>
      <button class="thanh-toan">Thanh Toán</button>
    </form>
</section>
    <script src="/js/giohang.js"></script>

    <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 300,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>
</body>
</html>