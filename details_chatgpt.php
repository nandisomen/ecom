<?php
session_start();
include("includes/db.php");
include("functions/functions.php");
?>

<?php
if(isset($_GET['pro_id'])){
    $pro_id = $_GET['pro_id'];

    // Fetch product details
    $get_product = "SELECT * FROM products WHERE product_id='$pro_id'";
    $run_product = mysqli_query($con, $get_product);

    if(mysqli_num_rows($run_product) > 0){
        $row_product = mysqli_fetch_array($run_product);
        $p_cat_id = $row_product['p_cat_id'];
        $p_title = $row_product['product_title'];
        $p_price = $row_product['product_price'];
        $p_desc = $row_product['product_desc'];
        $p_img1 = $row_product['product_img1'];
        $p_img2 = $row_product['product_img2'];
        $p_img3 = $row_product['product_img3'];

        // Fetch product category details
        $get_p_cat = "SELECT * FROM product_category WHERE p_cat_id='$p_cat_id'";
        $run_p_cat = mysqli_query($con, $get_p_cat);

        if(mysqli_num_rows($run_p_cat) > 0){
            $row_p_cat = mysqli_fetch_array($run_p_cat);
            $p_cat_id = $row_p_cat['p_cat_id'];
            $p_cat_title = $row_p_cat['p_cat_title'];
        } else {
            echo "Product category not found.";
            $p_cat_title = "";
        }
    } else {
        echo "Product not found.";
        $p_title = "";
        $p_price = "";
        $p_desc = "";
        $p_img1 = "";
        $p_img2 = "";
        $p_img3 = "";
        $p_cat_title = "";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ganpati Cosmetics</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="product page.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        /* Nav bar */
        .navbar{
            font-size: 30px;
        }
        .navbar-light{
            background-color: #7752FE;
            font-size: 22px;
            color: white;
        }
        .navbar-light .logo{
            text-decoration: none;
            font-size: 40px;
            font-weight: 600;
            font-family: 'didot';
            color: white;
        }
        /* search button */
        .search_box{
            display: flex;
            height: 40px;
            width: 400px;
            font-size: 15px;
        }
        .search_in{
            border: none;
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px;
            width: 100%;
        }
        .search_btn{
            border: none;
            background-color: #b6f35c;
            color: black;
            width: 100px;
            text-align: center;
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
            margin-right: 60px;
        }
        /* search end */
        .navbar .nav-item .nav{
            margin: 0px 10px;
            font-size: 22px;
            color: white;
            font-weight: 600;
            text-decoration: none;
        }
        .navbar .nav-item .nav:hover{
            color: #ffa806;
        }
        .navbar-light .navbar-toggler {
            color: rgb(255, 255, 255);
            border: none;
        }
        .nav_login a{
            text-decoration: none;
            margin: 0px 10px;
            font-size: 22px;
            color: white;
            font-weight: 600;
            text-decoration: none;
        }
        .nav_login a:hover{
            color: #ffa806;
        }
        a.dropdown-item{
            color: black;
        }
    </style>
</head>

<body>
    <!-- navigation bar -->
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
                    <li class="nav-item"><a class="nav nav-link" href="index.html"><i class="fa-solid fa-house"></i>Home</a></li>
                    <li class="nav-item nav_item2"><a class="nav nav-link" href="#artwork">Artwork</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav" href="#categories" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item dropdown-item2" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav_item2"><a class="nav nav-link" href="#about">About</a></li>
                    <li class="nav-item nav_item2"><a class="nav nav-link" href="#contact">Contact</a></li>
                    <li class="nav nav-link nav-item nav_login">
                        <a href="cart.php" class="">
                            <i class="fa fa-shopping-cart"></i>
                            <span><?php item(); ?> items in cart</span>
                        </a>
                    </li>
                    <li class="nav nav-link nav-item nav_login">
                        <?php
                        if (!isset($_SESSION['customer_email'])){
                            echo "<a href='checkout.php'>Login</a>";
                        } else {
                            echo "<a href='logout.php'>Logout</a>";
                        }
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="product_details container-fluid">
        <div class="row">
            <div class="col-lg-5 col-md-12 col-12 mt-2 pt-3">
                <img src="admin_area/product_images/<?php echo $p_img1 ?>" alt="product" class="w-100 img-fluid" id="big_img">
                <div class="small_img_group mt-2">
                    <div class="small_img_col mb-5">
                        <img src="admin_area/product_images/<?php echo $p_img1 ?>" class="small_img" width="100%" alt="p1">
                    </div>
                    <div class="small_img_col">
                        <img src="admin_area/product_images/<?php echo $p_img2 ?>" class="small_img" width="100%" alt="p1">
                    </div>
                    <div class="small_img_col">
                        <img src="admin_area/product_images/<?php echo $p_img3 ?>" class="small_img" width="100%" alt="p1">
                    </div>
                    <div class="small_img_col">
                        <img src="admin_area/product_images/<?php echo $p_img3 ?>" class="small_img" width="100%" alt="p1">
                    </div>
                    <div class="small_img_col">
                        <img src="admin_area/product_images/<?php echo $p_img3 ?>" class="small_img" width="100%" alt="p1">
                    </div>
                </div>
            </div>
            <div class="details col-lg-6 col-md-12 col-12 mt-2 pt-3">
                <h2 class="mb-3 tittle"><?php echo $p_title ?></h2>
                <h4 class="mb-4"><i class="fa-solid fa-paintbrush"></i>Art created by <span>Jhinuk Sutradhar</span></h4>
                <h3 class="mt-2 mb-3 price"><i class="fa fa-inr"></i><?php echo $p_price; ?></h3>
                <div>
                    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                    <i class="fa-regular fa-star"></i>
                    <span> 4.1</span>
                    <span>(1572)</span>
                </div>
                <div class="form-group">
                    <label class="col-md-5 control-label mt-3 mb-3">Product Quantity</label>
                    <div class="col-md-7">
                        <select name="product_qty" class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-8 col-12">
                    <img src="cod logo.png" alt="cod" class="img-fluid">
                </div>
                <div class="buy container-fluid">
                    <button class="buy-btn" type="submit">Add to Cart</button>
                    <button class="buy_btn" type="submit">Buy Now</button>
                </div>
                <span>Product Details</span>
                <p><?php echo $p_desc ?></p>
                <span class="mb-2"> What's Included:</span>
                <ul class="px-4">
                    <li>Big Size Plates (Set of 2): These large plates are designed to showcase grand wedding feasts with their generous size and intricate Alpona patterns. Diameter: 12 inches.</li>
                    <li>Small Size Plates (Set of 3): Perfect for serving appetizers, desserts, or side dishes, these smaller plates feature delicate Alpona motifs for a cohesive table setting. Diameter: 8 inches.</li>
                    <li>
                        Glass (Set of 1): A handcrafted glass, adorned with subtle Alpona-inspired details, adding a touch of sophistication to your wedding table. Capacity: 16 ounces.
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!--
    <div id="row same-height-row">
        <div class="col-md-3 col-sm-6">
            <div class="box same-height headline">
                <h3 class="text-center">You also like these products</h3>
            </div>
        </div>
        <?php
        $get_product = "SELECT * FROM products ORDER BY 1 LIMIT 0,5";
        $run_product = mysqli_query($con, $get_product);
        while ($row = mysqli_fetch_array($run_product)) {
            $pro_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_price = $row['product_price'];
            $product_img1 = $row['product_img1'];
            echo "
                <div class='d-3'>
                    <div class='product same-height'>
                        <a href='details.php?pro_id=$pro_id'>
                            <img src='admin_area/product_images/$product_img1' class='img-responsive' width='150'>
                        </a>
                        <div class='tet'>
                            <h3><a href='details.php?pro_id=$pro_id'>$product_title</a></h3>
                            <p class='price'>$product_price</p>
                        </div>
                    </div>
                </div>
            ";
        }
        ?>
    </div>
    -->

    <!-- footer section starts -->
    <?php
    include("includes/footer.php");
    ?>
    <!-- footer section -->

    <!-- js code for image change -->
    <script>
        var BigImg = document.getElementById('big_img');
        var SmallImg = document.getElementsByClassName('small_img');
        SmallImg[0].onclick = function(){
            BigImg.src = SmallImg[0].src;
        }
        SmallImg[1].onclick = function(){
            BigImg.src = SmallImg[1].src;
        }
        SmallImg[2].onclick = function(){
            BigImg.src = SmallImg[2].src;
        }
        SmallImg[3].onclick = function(){
            BigImg.src = SmallImg[3].src;
        }
        SmallImg[4].onclick = function(){
            BigImg.src = SmallImg[4].src;
        }
    </script>
    <!-- js code for image change end -->

    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
