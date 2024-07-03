<?php
session_start();
include("includes/db.php");


  ?>

<!DOCTYPE html>
<html>
<head>
	
	   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- owl carousel css file cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="/css/login.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- style sheet -->
	<style>
		body {
		background: #FFEFBA;  /* fallback for old browsers */
		background: -webkit-linear-gradient(to right, #FFFFFF, #FFEFBA);  /* Chrome 10-25, Safari 5.1-6 */
		background: linear-gradient(to right, #FFFFFF, #FFEFBA); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
		}

		.container {
		max-width: 400px;
		margin: 40px auto;
		padding: 20px;
		border-radius: 10px;
		background-color: white;
		box-shadow: 0 0 10px rgba(0, 0, 0, 0.776);
		background-color: white;
		backdrop-filter: blur(10px);
		-webkit-backdrop-filter: blur(10px);
			border-radius: 10px;
		}

		h2 {
		font-weight: 700;
		text-align: center;
		margin-bottom: 20px;
		}

		.logo {
		display: block;
		margin-left: auto;
		margin-right: auto;
		max-width: 400px;
		-webkit-filter: drop-shadow(5px 5px 5px #fff309);
			filter: drop-shadow(5px 5px 5px #1808088b);
		}
		a{
		text-decoration: none;
		text-align: center;
        font-size: 15px;
		}
        h4{
            text-align: center;
        }
		.btn{
		background-color: rgba(250, 16, 234, 0.742);
		}
		.btn:hover{
		background-color: #ffb300;
		}
        input{
            border: none;
            box-shadow: none;
        }

	</style>
</head>
<body>

<img src="css/logo-png.png" alt="logo" class="img-fluid logo">
<div class="container">
  <form class="form-login" action="" method="post">
  <h2 class="form-login" action="" method="post">Admin Login</h2>
    <div class="mb-3">
      <label for="username" class="form-label">Email Address</label>
      <input type="email" class="form-control" id="username" name="admin_email" placeholder="abcd@mail.com" required="">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" name="admin_pass" placeholder="Enter password" required="">
    </div>
    <button type="submit" class="btn w-100 mb-4" name="admin login">Login</button>
	<h4 class="forgot-password">
			<a href="forgot_password.php">Forgot Password </a>
		</h4>
  </form>
</div>
</body>
</html>

<?php
if (isset($_POST['admin_login'])){
	$admin_email=mysqli_real_escape_string($con,$_POST['admin_email']);
	$admin_pass=mysqli_real_escape_string($con,$_POST['admin_pass']);
	$get_admin="select * from admins where admin_email='$admin_email' AND admin_pass='$admin_pass'";
	$run_admin=mysqli_query($con,$get_admin);
	$count=mysqli_num_rows($run_admin);
	if ($count==1) {
		$_SESSION['admin_email']=$admin_email;
		echo "<script>alert('You are logged')</script>";
		echo "<script>window.open('index.php?dashboard','_self')</script>";
	}else{
		echo "<script>alert('Email / Password Wrong')</script>";
	}
}


  ?>