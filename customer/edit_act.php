<?php

$customer_email=$_SESSION['customer_email'];
$get_customer="select * from customers where customer_email='$customer_email'";
$run_cust=mysqli_query($con,$get_customer);
$row_cust=mysqli_fetch_array($run_cust);
$customer_id=$row_cust['customer_id'];
$customer_name=$row_cust['customer_name'];
$customer_email=$row_cust['customer_email'];
$customer_country=$row_cust['customer_country'];
$customer_city=$row_cust['customer_city'];
$customer_contact=$row_cust['customer_contact'];
$customer_address=$row_cust['customer_address'];
$customer_image=$row_cust['customer_image'];

  ?>

<div class="rx">
	<center>
	<h1>Edit Your Account</h1>
</center>
<form action="" method="post" >
<div class="roup">
	<label> Name</label>
	<input type="text" name="c_name" class="trol" value="<?php echo $customer_name; ?>" required=""> 	
</div>
<div class="roup">
	<label> Email</label>
	<input type="email" name="c_email" class="trol" value="<?php echo $customer_email; ?>" required=""> 	
</div>
<div class="roup">
	<label> Country</label>
	<input type="text" name="c_country" class="trol" value="<?php echo $customer_country; ?>" required=""> 	
</div>
<div class="roup">
	<label> City</label>
	<input type="text" name="c_city" class="trol" value="<?php echo $customer_city; ?>" required=""> 	
</div>
<div class="roup">
	<label>Contact Number</label>
	<input type="text" name="c_number" class="trol" value="<?php echo $customer_contact; ?>" required=""> 	
</div>

<div class="roup">
	<label> Address</label>
	<input type="text" name="c_address" class="trol" value="<?php echo $customer_address; ?>" required=""> 	
</div>
<div class="roup">
	<label>Customer Image</label>
	<input type="file" name="c_image" class="trol"  required=""> 
	<img src="customer_images/<?php  echo $customer_image; ?>" class="img-responsive" height="70" width="70">	
</div>
<div class="text-center">

	<button class="btn btn-primary" name="update" type="submit">
		Update Now
	</button>
</div>
</form>
</div>

<?php

if (isset($_POST['update'])){
    $update_id=$customer_id;
    $c_name=$_POST['c_name'];
    $c_email=$_POST['c_email'];
    $c_country=$_POST['c_country'];
    $c_city=$_POST['c_city'];
    $c_contact=$_POST['c_number'];
    $c_address=$_POST['c_address'];
    $c_image=$_FILES['c_image']['name'];
    $c_image_tmp=$_FILES['c_image']['tmp_name'];

    move_uploaded_file($c_image_tmp,"customer_images/$c_image");
                $update_customer="update customers set customer_name='$c_name',customer_email='$c_email',customer_country='$c_country',customer_city='$c_city',customer_contact='$c_contact',customer_address='$c_address',customer_image='$c_image' where customer_id='$update_id'";

    $run_customer=mysqli_query($con,$update_customer);
    if ($run_customer) {
    	echo "<script> alert('Your details updated.') </script>";
    	echo "<script> window.open('../index.php','_self') </script>";
    }
}
  ?>
