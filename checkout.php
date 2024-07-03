<?php 
session_start();
include("includes/db.php");  
include("functions/functions.php");

// Update quantity in cart
if(isset($_POST['update_update_btn'])){
    $update_value = (int) $_POST['update_quantity'];
    $update_id = (int) $_POST['update_quantity_id'];

    $stmt = $con->prepare("UPDATE `cart` SET qty = ? WHERE p_id = ?");
    $stmt->bind_param("ii", $update_value, $update_id);
    $stmt->execute();

    if($stmt->affected_rows > 0){
       header('location:cart.php');
    }
    $stmt->close();
}

// Remove item from cart
if(isset($_GET['remove'])){
    $remove_id = (int) $_GET['remove'];

    $stmt = $con->prepare("DELETE FROM `cart` WHERE p_id = ?");
    $stmt->bind_param("i", $remove_id);
    $stmt->execute();
    $stmt->close();

    header('location:cart.php');
}

// Delete all items in cart
if(isset($_GET['delete_all'])){
    $stmt = $con->prepare("DELETE FROM `cart`");
    $stmt->execute();
    $stmt->close();

    header('location:cart.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="cart.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="nav bar.css">
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
              <form class="search_box mx-auto">
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


<!-- <header>
    <div class="header-1">
        <div class="col-md-6 offer">
            <a href="#" class="btn btn-success btn-sm">
                <?php
                echo isset($_SESSION['customer_email']) ? "Welcome: " . $_SESSION['customer_email'] : "Welcome Guest";
                ?>
            </a>
        </div>
    </div>

    <div class="header-2">
        <nav class="navbar">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="trimer.php">SHOP</a></li>
                <div class="col-md-6">
                    <ul class="menu">
                        <li><a href="cart.php" class=""><i class="fa fa-shopping-cart"></i><span><?php item(); ?> items in cart</span></a></li>
                        <li><a class="active" href="cart.php"><i class="fa fa-shopping-cart"></i>Goto Cart</a></li>
                        <li><?php echo isset($_SESSION['customer_email']) ? "<a href='logout.php'>Logout</a>" : "<a href='customer_login.php'>Login</a>"; ?></li>
                    </ul>
                </div>
            </ul>
        </nav>
    </div>
</header> -->

<main>
<div class="col-8 mx-auto mt-5">
                              <?php

                              if (!isset($_SESSION['customer_email'])) {
                                include ('customer/customer_login.php');
                              }else{
                                include ('payment_options.php');
                              }


                                ?>
                        </div>


</main>


</body>
</html>