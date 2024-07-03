<?php 
session_start();
if (!isset($_SESSION['customer_email'])) {
  echo "<script>window.open('../checkout.php','_self')</script>";
}else{

include("../includes/db.php");  
include("../functions/functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art World</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- owl carousel css file cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../style.css">
  <style>


  </style>
 
</head>
<body>

<!-- header section starts  -->

<header>

<div class="header-1">

    <a href="../index.php" class="logo" > <img src="art owrld logo (3).png" alt="Art World" class="hidden-xs img-fulid">  </a>
                               
<div class="col-md-6 offer">
    <a href="#" class="btn btn-sucess btn-sm">
           <?php

        if (!isset($_SESSION['customer_email'])){
        echo "Welcome Guest";
      }else{
      echo "Welcome: " .$_SESSION['customer_email'] . "";
    }


        ?>
    </a>
<a id="pr" href="#"> Shopping Cart Total Price: INR <?php totalPrice(); ?>, Total Items <?php item(); ?></a>
</div>
  
</div>

<div class="header-2">
   

<nav class="navbar"> 


     <ul >
       
            <li><a  href="../index.php">HOME</a></li>
            <li><a  href="../trimer.php">SHOP</a></li>
        
            <li><a href="../contactus.php">CONTACT</a></li>
         
 
       <div class="col-md-6">
        <ul class="menu">
            <li>
                         <div class="collapse clearfix" id="search">
                             <form class="navbar-form" method="get" action="result.php">
                                 <div class="input-group">
                                     <input type="text" name="user_query" placeholder="search" class="form-control" required="">
                                     <button type="submit" value="search" name="search" class="btn btn-primary">
                                         <i class="fa fa-search"></i>
                                     </button>
                                 </div>
                             </form>
                         </div>
                   </li>



                <li>
                  <a href="../cart.php" class="">
                    <i class="fa fa-shopping-cart"></i>
                      <span><?php item(); ?> items in cart</span>
                        </a>
                </li>
                   

                   <li>
                   <a  href="../customer_registration.php"><i class="fa fa-user-plus"></i>Register</a></li>
                   <li>
                   <?php

                    if (!isset($_SESSION['customer_email'])){
                    echo "<a href='checkout.php'>My Account</a>";

                         } else{
                    
                    echo "<a href='../customer/my_account.php?my_order' class='active'>My Account</a>";
                
                         }

                    ?></li> 
                     
                   <li>
                   <a href="../cart.php"><i class="fa fa-shopping-cart"></i>Goto Cart</a></li>
                    
                   <li>
                     <?php

                    if (!isset($_SESSION['customer_email'])){
                    echo "<a href='checkout.php'>Login</a>";

                         } else{
                    
                    echo "<a href='../logout.php'>Logout</a>";
                
                         }

                    ?></li>
             </ul>
       </div>
</ul>



</nav></div></header>

<!-- header section End  -->

<section class="content" id="content">
  <div class="container">
    <div class="col-md-12">
      <ul class="breadcrumb">
     
        <li><span>My Account</span></li>
        

      </ul>

    </div>
</div></section> 
 <div class="col-m-9">

  <!-- including my_order.php starts  -->

   <?php
     if (isset($_GET['my_order']))
     {
      include("my_order.php");
     }
     ?>

     <!-- including my_order.php End  -->

     <!-- including payoffline.php page starts  -->
<?php

if (isset($_GET['pay_offline'])){
  include("pay_offline.php");
}

  ?>

     <!-- including payoffline.php page End  -->
       <!-- including Edit_account.php page start  -->
         <?php
            if (isset($_GET['edit_act'])){
              include("edit_act.php");
            }
           ?>

         <!-- including Edit_account.php page End  -->
           <!-- including change_pass.php page Start  -->
         <?php
            if (isset($_GET['change_pass'])){
              include("change_password.php");
            }
           ?>

            <!-- including change_pass.php page End  -->
             <!-- including delete_pass.php page Start  -->

                <?php
            if (isset($_GET['delete_ac'])){
              include("delete_ac.php");
            }
           ?>

              <!-- including delete_pass.php page End  -->
 </div>

    
  
  <div class="content1" id="content1">
  <div class="container1">
    <div class="col-md-3">
      <?php
      include("includes/sidebar.php");  
      ?>
   
    </div>

</div>
     </div>

       <!-- footer section starts  -->
   <?php
      include("includes/footer.php");  
      ?>
<!-- footer section   -->

<?php } ?></body></html>