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
    <title>Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="nav bar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
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
              <li class="nav-item nav_item2"><a class="nav nav-link" href="#artwork">Artwork</a></li>
              <li class="nav-item nav_item2"><a class="nav nav-link" href="#categories">Categories</a></li>
              <li class="nav-item nav_item2"><a class="nav nav-link" href="#about">About</a></li>
              <li class="nav-item nav_item2"><a class="nav nav-link" href="#contact">Contact</a></li>
              <li class="nav-item nav_item2"><a class="nav nav-link" href="#cart"> Cart <i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i></a></li>
              <li class="nav-item nav_item2"><a class="nav nav-link" href="#contact">Logout</a></li>
          </div>
        </div>
      </nav>
    <main>
        <section>
          <div class="row container-fluid my-4 row-gap-5">
                        <?php

                if(!isset($_GET['p_cat'])){
                    if(!isset($_GET['cat_id'])){
                        $per_page=12;
                        if(isset($_GET['page'])){
                            $page=$_GET['page'];
                        } else {
                            $page=1;
                        }
                        $start_from=($page-1) * $per_page;
                        $get_product="select * from products order by 1 DESC LIMIT $start_from, $per_page";
                        $run_pro=mysqli_query($con,$get_product);
                        while ($row=mysqli_fetch_array($run_pro)) {
                            $pro_id=$row['product_id'];
                            $pro_title=$row['product_title'];
                            $pro_price=$row['product_price'];
                            $pro_img1=$row['product_img1'];
                            
                            echo "<div class='product col-lg-3 col-md-6 col-12 p-3' onclick=\"window.location.href='details.php?pro_id=$pro_id';\">
                            <a href='details.php?pro_id=$pro_id'><img src='admin_area/product_images/$pro_img1' class='img-fluid'></a>
                            
                            <h2>$pro_title</h2>
                            <div>
                                <i class='fa-solid fa-star' style='color: #FFD43B;'></i>
                                <i class='fa-solid fa-star' style='color: #FFD43B;'></i>
                                <i class='fa-solid fa-star' style='color: #FFD43B;'></i>
                                <i class='fa-solid fa-star' style='color: #FFD43B;'></i>
                                <i class='fa-regular fa-star'></i>
                                <span>  4.1</span>
                                <span>(792)</span>
                            </div>
                            <h4 class='mt-2 mb-3'>₹$pro_price</h4>
                            <a href='details.php?pro_id=$pro_id'><button>Buy Now</button></a>
                        </div>";
                        }
                        
                    }
                }
                ?>
          </div>
        </section>

        <!-- pagenatinon -->
        <section>
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav>
        </section>
        <!-- pagenatinon -->
     
        <div class="products">
      
        <?php
        echo getPcatPro();
        
        echo getCatPro(); 
        ?> 
</div> </div></div>
<!--Page Session End-->
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

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
