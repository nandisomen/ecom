<?php
session_start();
include("includes/db.php");

include("functions/functions.php");
  ?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Art World</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="nav bar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
    <link rel="stylesheet" href="index1.css"> 
    <link rel="stylesheet" href="shop.css">   
  </head>
  <body>

     <!-- navicatinon bar -->
     
     <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <a class="logo" href="#">Art World</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ml-auto">
              <form class="search_box">
                <input class="search_in" type="search" placeholder="Search" aria-label="Search">
                <button class="search_btn" type="submit">Search</button>
              </form>   
              <li class="nav-item"><a class="nav nav-link" href="#home"><i class="fa-solid fa-house"></i> Home</a></li>
              <li class="nav-item "><a class="nav nav-link" href="trimer.php">Shop</a></li>
              <li class="nav-item "><a class="nav nav-link" href="#wall-painting">Wall Painting</a></li>
              <li class="nav-item dropdown">
                <a class="nav nav-link" href="#categories" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categories   <i class="fa-solid fa-angle-down down_icon"></i>
                 </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item dropdown-item2" href="#hand-craft">Handicraft Items</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item "><a class="nav nav-link" href="#about">About</a></li>
              <li class="nav-item nav_login">
                <a href="cart.php" class="nav nav-link">
                    <span> Cart <?php item(); ?></span><i class="fa fa-shopping-cart"></i>
                      </a>
              </li>
              <li class="nav-item">
                     <?php

                    if (!isset($_SESSION['customer_email'])){
                    echo "<a href='customer/customer_login.php' class='nav nav-link'>Login</a>";

                         } else{
                    
                    echo "<a href='logout.php'  class='nav nav-link'>Logout</a>";
                
                         }

                    ?></li>
          </div>
          
        </div>
      </nav>
      <span class="nav-head">
      <a href="#" class="btn btn-sucess btn-sm">
          <?php

        if (!isset($_SESSION['customer_email'])){
        echo "Welcome Guest";
      }else{
      echo "Welcome  " .$_SESSION['customer_email'] . "";
    }


        ?>
    </a>
      </span>
      
      <!-- nav bar end -->

    
     <main>
        <section class="hero-section">
            <div class="row hero ">
                <div class="col">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        </div>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="index-page-img/hero/hero-1.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="index-page-img/hero/hero-2.png" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="index-page-img/hero/hero-4.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="index-page-img/hero/hero-6.jpg" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
            </div>
        </section>
        <br>
        <br>
        <div class="container-fluid">
            <div class="col-12">
                <h2 class="text-center new_arrivals ">New Arrivals </h2>
           
          <!-- dynamic latest this week images section start  -->
          <div class=" col-12" >
          <div class="row">
                   <?php

                   getPro();


                     ?>
 </div>
</div><!-- hot End -->
 </div>
         </div>

    <!-- new arival end -->

    <!-- offer section -->
    <section class="section section-two">
        <div class="section-two-cont">
          <div class="offer-cont  text-center">
            <h2>Transform Your Space </h2>
            <h3>Discover Unique Art and Wall Paintings for Every Style!</h3>

          </div>
        </div>

      </section>



  <!-- art from verious -->

  <section class="section section-one container-fluid">
          <h2 class="new_arrivals">Art from Various States</h2>
          <div class="row">
              <div class="product_containe container row">
                  <div onclick="window.location.href='reg_user.html';" class="product_card col-6 col-lg-3 col-md-4">
                    <img src="index-page-img/verious-state/patachitra-painting.jpg" alt="Patachitra Painting">
                    <h2>Patachitra Painting</h2>
                    <p>A traditional art form from Odisha and West Bengal, Pattachitra paintings are known for their intricate details, mythological narratives, and use of natural colors.</p>
                    <a class="button_a"href="#"><button class="btn_exp">Explore</button></a>
                    
                  </div>
                  <div class="product_card col-6 col-lg-3 col-md-4">
                    <img src="index-page-img/verious-state/kalamkari painting.jpg" alt="Kalamkari Painting">
                    <h2>Kalamkari Painting</h2>
                    <p>Originating from Andhra Pradesh and Telangana, Kalamkari paintings are known for their intricate patterns and use of natural dyes. They often depict mythological stories, floral motifs, and scenes from Indian epics.</p>
                    <a class="button_a"href="#"><button class="btn_exp">Explore</button></a>
                  </div>
                  <div class="product_card col-6 col-lg-3 col-md-4">
                    <img src="index-page-img/verious-state/madhubani-painting.jpeg" class="img-fluid" alt="Madhubani Painting">
                    <h2>Madhubani Painting</h2>
                    <p>Originating from Bihar, Madhubani paintings are known for their intricate patterns, vibrant colors, and depiction of mythological themes, nature, and everyday life. They often use geometric patterns and motifs.</p>
                    <a class="button_a"href="#"><button class="btn_exp">Explore</button></a>
                  </div>
                  <div class="product_card col-6 col-lg-3 col-md-4">
                    <img src="index-page-img/verious-state/Bengal-Pattachitra.jpg" alt="Bengali Patachitra Painting">
                    <h2>Bengal Patachitra Painting</h2>
                    <p>A form of Pattachitra from West Bengal, these paintings often depict stories of Lord Krishna and Radha, along with scenes from everyday rural life.</p>
                    <a class="button_a"href="#"><button class="btn_exp">Explore</button></a>
                  </div>
                  <div class="product_card col-6 col-lg-3 col-md-4">
                    <img src="index-page-img/verious-state/Warli Painting.jpg" alt="Warli Painting">
                    <h2>Warli Painting</h2>
                    <p>Hailing from Maharashtra, Warli paintings are characterized by simple geometric shapes, such as circles, triangles, and squares, and depict scenes from rural life, folktales, and rituals. </p>
                    <a class="button_a"href="#"><button class="btn_exp">Explore</button></a>
                  </div>
                  <div class="product_card col-6 col-lg-3 col-md-4">
                    <img src="index-page-img/verious-state/tanjore painting.jpg" alt="Tanjore Painting">
                    <h2>Tanjore Painting</h2>
                    <p>Originating from Tamil Nadu, Tanjore paintings are known for their rich colors, gold foils, and intricate detailing. They typically depict Hindu gods and goddesses, and scenes from religious texts. </p>
                    <a class="button_a"href="#"><button class="btn_exp">Explore</button></a>
                  </div>
                  <div class="product_card col-6 col-lg-3 col-md-4">
                    <img src="index-page-img/verious-state/miniature painting.jpg" alt="Miniature Painting">
                    <h2>Miniature Painting</h2>
                    <p>Miniature paintings, originating from various regions such as Rajasthan, Punjab, and Uttar Pradesh, are characterized by their intricate details and fine brushwork. They often depict royal court scenes, mythological stories, and historical events.</p>
                    <a class="button_a"href="#"><button class="btn_exp">Explore</button></a>
                  </div>
                  <div class="product_card col-6 col-lg-3 col-md-4">
                    <img src="index-page-img/verious-state/gond-painting.jpg" alt="Gond Painting:">
                    <h2>Gond Painting</h2>
                    <p>Hailing from Madhya Pradesh, Gond paintings are characterized by their intricate patterns, vibrant colors, and depiction of animals, birds, and nature. They typically use dot and line patterns to create intricate designs. </p>
                    <a class="button_a"href="#"><button class="btn_exp">Explore</button></a>
                  </div>

          </div>
          

        </section>
      <!-- art verious end -->
      <!-- offer section 2 -->
         <!-- offer section2 -->
    </section>
    <section class="section section-two">
      <div class="section-two-cont section-three-cont">
        <div class="offer-cont  text-center">
          <h2>Every picture tells a story</h2>
          <h3>let your imagination fill in the details</h3>

        </div>
      </div>

    </section>
      <!-- offer section 2 end -->

      <!-- offer section 2 end -->
          

          <!-- section 3 -->
      
        <section class="section" id="wall-painting">
          <h2 class="new_arrivals"> Wall Painting</h2>
          <div class="row container-fluid my-4 row-gap-5">
            <div class="product col-lg-3 col-md-6 col-12 p-3" onclick="window.location.href='#';">
              <img src="index-page-img/wall painting/wall-1.jpg" alt="" class="img-fluid">
              <h2>Buddha Wall Painting</h2>
              <div>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-regular fa-star"></i>
                <span>  4.1</span>
                <span>(556)</span>
              </div>
              <h4 class="mt-2 mb-3 ">₹1,599</h4>
              <button>Buy Now</button>
    
            </div>
            <div class="product col-lg-3 col-md-6 col-12 p-3" onclick="window.location.href='#';">
              <img src="index-page-img/wall painting/wall-2.jpg" alt="" class="img-fluid">
              <h2>Wall Decor Paintings</h2>
              <div>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-regular fa-star"></i>
                <span>  4.1</span>
                <span>(792)</span>
              </div>
              <h4 class="mt-2 mb-3 ">₹899</h4>
              <button>Buy Now</button>
    
            </div>
            <div class="product col-lg-3 col-md-6 col-12 p-3" onclick="window.location.href='#';">
              <img src="index-page-img/wall painting/wall-3.png" alt="" class="img-fluid">
              <h2>Deer Painting</h2>
              <div>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-regular fa-star"></i>
                <span>  4.1</span>
                <span>(951)</span>
              </div>
              <h4 class="mt-2 mb-3 ">₹1,899</h4>
              <button>Buy Now</button>
    
            </div>
            <div class="product col-lg-3 col-md-6 col-12 p-3" onclick="window.location.href='#';">
              <img src="index-page-img/wall painting/wall-4.jpg" alt="" class="img-fluid">
              <h2>Modern Art Wall Decor</h2>
              <div>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-regular fa-star"></i>
                <span>  4.1</span>
                <span>(1572)</span>
              </div>
              <h4 class="mt-2 mb-3 ">₹1,099</h4>
              <button>Buy Now</button>
            </div>

            <div class="product col-lg-3 col-md-6 col-12 p-3">
              <img src="index-page-img/wall painting/wall-5.png" alt="" class="img-fluid">
              <h2>Chitran Shiva Kailash Canvas Painting</h2>
              <div>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-regular fa-star"></i>
                <span>  4.1</span>
                <span>(1572)</span>
              </div>
              <h4 class="mt-2 mb-3 ">₹1,999</h4>
              <button>Buy Now</button>
            </div>

            <div class="product col-lg-3 col-md-6 col-12 p-3">
              <img src="index-page-img/wall painting/wall-6.jpg" alt="" class="img-fluid">
              <h2>Set of 3 Moderate Flower Wall Art Painting</h2>
              <div>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-regular fa-star"></i>
                <span>  4.1</span>
                <span>(152)</span>
              </div>
              <h4 class="mt-2 mb-3 ">₹2,199</h4>
              <button>Buy Now</button>
            </div>

            <div class="product col-lg-3 col-md-6 col-12 p-3">
              <img src="index-page-img/wall painting/wall-7.png" alt="" class="img-fluid">
              <h2>8 Minimalist Geometric Wall Painting</h2>
              <div>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-regular fa-star"></i>
                <span>  4.1</span>
                <span>(326)</span>
              </div>
              <h4 class="mt-2 mb-3 ">₹1,799</h4>
              <button>Buy Now</button>
            </div>

            <div class="product col-lg-3 col-md-6 col-12 p-3">
              <img src="index-page-img/wall painting/wall-8.png" alt="" class="img-fluid">
              <h2>3 Vibrant Abstract Art Prints</h2>
              <div>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-regular fa-star"></i>
                <span>  4.1</span>
                <span>(923)</span>
              </div>
              <h4 class="mt-2 mb-3 ">₹5,699</h4>
              <button>Buy Now</button>
            </div>
          </div>
        </section>
        <!-- section 3 end -->

        <!-- offer section 3 -->
        <section class="section section-two" id="hand-craft">
      <div class="section-two-cont section-four-cont">
        <div class="offer-cont  text-center">
          <h2>Handicraft Items</h2>
          <h3>Handmade happiness, delivered to your door.</h3>

        </div>
      </div>

    </section>


        <!-- offer section 3  end-->

        <!-- section 4 start -->
        <section class="section">
          <h2 class="new_arrivals">Handicraft Items</h2>
          <div class="row container-fluid my-4 row-gap-5">
            <div class="product col-lg-3 col-md-6 col-12 p-3" onclick="window.location.href='#';">
              <img src="index-page-img/hand craft/hand-craft-1.jpg" alt="" class="img-fluid">
              <h2>Soil Flower painting Home Decor</h2>
              <div>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-regular fa-star"></i>
                <span>  4.1</span>
                <span>(556)</span>
              </div>
              <h4 class="mt-2 mb-3 ">₹1,599</h4>
              <button>Buy Now</button>
    
            </div>
            <div class="product col-lg-3 col-md-6 col-12 p-3" onclick="window.location.href='#';">
              <img src="index-page-img/hand craft/hand-craft-2.jpg" alt="" class="img-fluid">
              <h2>Wise Owls Handmade</h2>
              <div>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-regular fa-star"></i>
                <span>  4.1</span>
                <span>(792)</span>
              </div>
              <h4 class="mt-2 mb-3 ">₹899</h4>
              <button>Buy Now</button>
    
            </div>
            <div class="product col-lg-3 col-md-6 col-12 p-3" onclick="window.location.href='#';">
              <img src="index-page-img/hand craft/hand-craft-3.jpg" alt="" class="img-fluid">
              <h2>HAND PAINTED DASABHUJA DEVI</h2>
              <div>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-regular fa-star"></i>
                <span>  4.1</span>
                <span>(951)</span>
              </div>
              <h4 class="mt-2 mb-3 ">₹1,899</h4>
              <button>Buy Now</button>
    
            </div>
            <div class="product col-lg-3 col-md-6 col-12 p-3" onclick="window.location.href='#';">
              <img src="index-page-img/hand craft/product3.jpg" alt="" class="img-fluid">
              <h2> Boron Kulo Groom & Bride</h2>
              <div>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-regular fa-star"></i>
                <span>  4.1</span>
                <span>(1572)</span>
              </div>
              <h4 class="mt-2 mb-3 ">₹1,099</h4>
              <button>Buy Now</button>
            </div>

            <div class="product col-lg-3 col-md-6 col-12 p-3">
              <img src="index-page-img/hand craft/hand-craft-5.jpg" alt="" class="img-fluid">
              <h2>Bankura Horse</h2>
              <div>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-regular fa-star"></i>
                <span>  4.1</span>
                <span>(1572)</span>
              </div>
              <h4 class="mt-2 mb-3 ">₹1,999</h4>
              <button>Buy Now</button>
            </div>

            <div class="product col-lg-3 col-md-6 col-12 p-3">
              <img src="index-page-img/hand craft/hand-craft-6.jpg" alt="" class="img-fluid">
              <h2>Purulia Chau Goddess Face Mask</h2>
              <div>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-regular fa-star"></i>
                <span>  4.1</span>
                <span>(152)</span>
              </div>
              <h4 class="mt-2 mb-3 ">₹2,199</h4>
              <button>Buy Now</button>
            </div>

            <div class="product col-lg-3 col-md-6 col-12 p-3">
              <img src="index-page-img/hand craft/hand-craft-7.jpg" alt="" class="img-fluid">
              <h2>Handcrafted Jute Horse</h2>
              <div>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-regular fa-star"></i>
                <span>  4.1</span>
                <span>(326)</span>
              </div>
              <h4 class="mt-2 mb-3 ">₹1,799</h4>
              <button>Buy Now</button>
            </div>

            <div class="product col-lg-3 col-md-6 col-12 p-3">
              <img src="index-page-img/hand craft/hand-craft-8.jpg" alt="" class="img-fluid">
              <h2>Tribal Terracotta masks</h2>
              <div>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                <i class="fa-regular fa-star"></i>
                <span>  4.1</span>
                <span>(923)</span>
              </div>
              <h4 class="mt-2 mb-3 ">₹5,699</h4>
              <button>Buy Now</button>
            </div>
          </div>
        </section>
        


    <!-- end -->

    </main>

    <!-- footer section -->
    <footer>
      <div class="footer-container">
          <div class="footer-section">
              <h3>About Us</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque sagittis nisi.</p>
          </div>
          <div class="footer-section">
              <h3>Quick Links</h3>
              <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Shop</a></li>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Contact Us</a></li>
              </ul>
          </div>
          <div class="footer-section">
              <h3>Contact Us</h3>
              <p>Email: info@example.com</p>
              <p>Phone: +123 456 7890</p>
          </div>
      </div>
  </footer>
  <!-- Footer section -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>