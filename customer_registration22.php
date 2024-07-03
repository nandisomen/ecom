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
    <title>User Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/reg_page.css">

    <!-- font Awsome CDN link -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <main>
      <div class="logo mx-auto col-lg-4 col-md-6 col-8 mb-3">
        <img src="somen image\logo\art-World-logo-2.png" class="img-fluid" alt="Logo">
    </div>

    <section>
        <div class="row container-fluid mt-3 mx-auto">
           
            <div class="main_div col-lg-6 col-md-8 col-11 mx-auto row-gap-5 p-lg-5">
                <h3 class="text-center">Registration</h3>
                <hr>
                <form action="customer_registration.php" method="post" enctype="multipart/form-data">
                  <div class="roup">
                    <label for="c_name" >Full Name <i class="fa-solid fa-signature" style="color: #000000;"></i></label>
                    <input type="text" id="c_name"  name="c_name" required="" class="form-control">
                  </div>
                  <div class="">
                    <label for="c_email">Enter Email <i class="fa-regular fa-envelope" style="color: #000000;"></i></label>
                    <input type="text" name="c_email" id="c_email"  class="form-control" required="">
                    
                  </div>
                  <div class="roup">
                    <label for="c_password">Create Password <i class="fa-sharp fa-solid fa-key" style="color: #000000;"></i></label>
                    <input type="password" name="c_password"  id="c_password" class="form-control" required="">
                    <input  type="checkbox" class="checkbox-lg" onclick="myFunction()"><span>Show Password </span>
                    
                  </div>

                  <div class="roup ">
                    <label  for="c_country">Country <i class="fa-solid fa-earth-asia" style="color: #000000;"></i></label>
                    
                    <input type="text" name="c_country"  id="c_country" class="form-control" required="">
                    
                  </div>

                  <div class="roup">
                    <label  for="c_city">City <i class="fa-solid fa-city" style="color: #000000;"></i></label>
                    <input type="text" name="c_city"  id="c_city" class="form-control" required="">
                    
                  </div>
                  
                  <div class="roup">
                    <label for="c_contact">Contact Number <i class="fa-solid fa-mobile-retro" style="color: #000000;"></i></label>
                    <input type="text" name="c_contact" id="c_contact" class="form-control" required="">
                    
                  </div>
                  <div class="roup">
                    <label for="c_address">Address <i class="fa-solid fa-location-dot" style="color: #000000;"></i></label>
                    <input type="text" name="c_address" id="c_address" class="form-control" required="">
                    
                  </div>
                  <div class="roup">
                    <label for="c_image">Image <i class="fa-regular fa-file-image" style="color: #000000;"></i></label>
                    <input type="file" name="c_image" id="c_image" class="form-control" accept="image/png, image/gif, image/jpeg" required="">
                    
                  </div>
                  <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-primary">
                      
                       Register <i class="fa-solid fa-user" style="color: #ffffff;"></i>
                    </button>
                  </div>
                </form>
              </div>

        </div>
    </section>

    </main>
   

    <section>
        <!-- fotter -->
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
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


    <script>
      function myFunction() {
        var x = document.getElementById("c_password");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      }
      </script>
  </body>
</html>





<?php 

if (isset($_POST['submit'])) {
  $c_name=$_POST['c_name'];
  $c_email=$_POST['c_email'];
  $c_password=$_POST['c_password'];
  $c_country=$_POST['c_country'];
  $c_city=$_POST['c_city'];
  $c_contact=$_POST['c_contact'];
  $c_address=$_POST['c_address'];
  $c_image=$_FILES['c_image']['name'];
    $c_tmp_image=$_FILES['c_image']['tmp_name'];
    $c_ip=getUserIp();

    move_uploaded_file($c_tmp_image, "customer/customer_images/$c_image");
    $insert_customer="insert into customers (customer_name, customer_email, customer_pass, customer_country, customer_city, customer_contact, customer_address, customer_image, customer_ip) values('$c_name','$c_email','$c_password','$c_country','$c_city','$c_contact','$c_address','$c_image','$c_ip')";
    $run_customer=mysqli_query($con,$insert_customer);
    $sel_cart="select * from cart where ip_add='$c_ip'";
    $run_cart=mysqli_query($con,$sel_cart);
    $check_cart=mysqli_num_rows($run_cart);
    if($check_cart>0){
    $_SESSION['customer_email']=$c_email;
    echo "<script>alert('you have been registered successfully')</script>";
    echo "<script>window.open('checkout.php','_self')</script>";
  }else {
    $_SESSION['customer_email']=$c_email;
    echo "<script>alert('you have been registered successfully')</script>";
    echo "<script>window.open('index.php','_self')</script>"; 
}
}


?>