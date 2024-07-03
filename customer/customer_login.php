<?php
session_start();
include("../includes/db.php");

include("../functions/functions.php");
  ?>

<?php

  if (isset($_POST['login'])) {
      $customer_email=$_POST['c_email'];
      $customer_pass=$_POST['c_password'];
      $select_customers="select * from customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";
      $run_cust=mysqli_query($con, $select_customers);
      $get_ip=getUserIp();
      $check_customer=mysqli_num_rows($run_cust);
      $select_cart="select * from cart where ip_add='$get_ip'";
      $run_cart=mysqli_query($con, $select_cart);
      $check_cart=mysqli_num_rows($run_cart);
      if ($check_customer==0) {
          echo "<script>alert('Password/Email Wrong')</script>";
          exit();
      }
      if ($check_customer==1 AND $check_cart==0) {
          $_SESSION['customer_email']=$customer_email;
          echo "<script>alert('You are logged In')</script>";
          echo "<script>window.open('/e_com/trimer.php','_self')</script>";
      }else{
          $_SESSION['customer_email']=$customer_email;
          echo "<script>alert('You are logged In')</script>";
          echo "<script>window.open('/e_com/index.php?Home','_self')</script>";
      }
  }
  
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="user-login.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- owl carousel css file cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <!-- <link rel="stylesheet" href="style.css"> -->
  <style>
    ::placeholder {
  color: black;
  opacity: 0.8; /* Firefox */
}

  </style>
 
</head>
<body>
    <div class="col-lg-6 col-12 mx-auto logo"> <img src="logo png.png" alt="" class="img-fluid"></div>
    <div class="main_cont col-lg-4 col-md-7 col-10 mx-auto container-fluid">
        <h3>User Login</h3>
        <form accept="checkout.php" method="post">
              <label for="email">Email Address</label>
            <div id="num" class=""><input id="c_email" class="form-conrol" type="email" placeholder=" Email Address" name="c_email" required /></div>
            <label for="password">Password</label>
            <div id="pass"><input type="password" id="c_password" class="form-conrol" name="c_password" placeholder="   Password" required/> </div>
            <div id="login"><button name="login"  value="login" id="login-btn btn">Login</button></div>
        </form>
            <div class="forget_new">
                <div class="neww"><a href="\e_com\customer_registration.php">Creat New Account</a> </div>
                <div id="forget"><a  href="#forgetpass">Forget Password</a></div>
            </div>
            

    </div>






    <!-- Bootstrap Js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>