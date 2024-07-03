<div class="rx">
	<div class="box-header">
		<center>
			<h2>Login</h2>
			<p class="lead">Already our customer</p>
		</center>
	</div>
	<form accept="checkout.php" method="post">
		<div class="roup">
			<label>Email: </label>
			<input type="text" class="form-control" name="c_email" required="">
		</div>
		<div class="roup">
			<label>Password: </label>
			<input type="password" class="form-control" name="c_password" required="">
		</div>
		<div class="text-center">
			<button name="login" value="login" class="btn btn-primary"><i class="fa fa-sign-in"></i>Log In</button>
		</div>
	</form>
	<center><a href="/customer_registration.php">
		<h3>New ? Register Now </h3>
	</a></center>
</div>
<div class="col-lg-6 col-12 mx-auto logo"> <img src="logo png.png" alt="" class="img-fluid"></div>
    <div class="main_cont col-lg-4 col-md-7 col-10 mx-auto container-fluid rx">
        <h3>User Login</h3>
              <label for="email">Email Address</label>
            <div id="num" class=""><input id="email" type="email" name="c_email" placeholder=" Email Address" required /></div>
            <label for="password">Password</label>
            <div id="pass"><input type="password" id="password" name="c_password" placeholder="   Password" required/> </div>
            <div id="login"><button name="login" value="login" id="login-btn">Login</button></div>
            <div class="forget_new">
                <div class="neww"><a href="/customer_registration.php">Creat New Account</a> </div>
                <div id="forget"><a  href="/customer/change_password.php">Forget Password</a></div>
            </div>
            

    </div>

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
		echo "<script>window.open('index.php?Home','_self')</script>";
	}else{
		$_SESSION['customer_email']=$customer_email;
		echo "<script>alert('You are logged In')</script>";
		echo "<script>window.open('checkout.php','_self')</script>";
	}
}

  ?>