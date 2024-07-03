<?php
if (!isset($_SESSION['admin_email'])){

  echo "<script>window.open('login.php','_self')</script>";
  }else{
?>

  
<!DOCTYPE html>
<html>
<head>
	<title>Insert Product</title>
	
<script>tinymce.init({selector:'textarea'});</script>

</head>
<body>

<div class="row"><!--breadcrump start-->
	<div class="col-lg-12">
		<div class="breadcrump">
			<li class="active">
				<i class="fa fa-bar-chart"></i>
				Dashboard / Insert Product
			</li>
		</div>
	</div>
</div><!--breadcrump End-->
<div class="row">
	<div class="col-lg-3">
		
	</div>
	<div class="col-lg-6">
		<div class="panel panel-default">
			<div class="panel-heading"><!--panel-heading start-->
				<h3 class="panel-title">
					<i class="fa fa-money fa-fw"> Insert Product </i>
				</h3>
			</div><!--panel-heading End-->
			<div class="panel-body">
				<form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
					<div class="form-group">
						<label class="col-md-3 control-label">Product Title</label>
						<input type="text" name="product_title" class="form-control" required>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Aritst Name</label>
						<input type="text" name="artist_name" class="form-control" required="">
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Product Category</label>
						<select name="product_cat" class="form-control">
							<option>Select a Product Category</option>

							<?php
							$get_p_cats="select * from product_category";
							$run_p_cats=mysqli_query($con,$get_p_cats);
							while ($row=mysqli_fetch_array($run_p_cats)) {
							  	$id=$row['p_cat_id'];
							  	$cat_title=$row['p_cat_title'];
							  	echo "<option value='$id' > $cat_title </option>";
							  }  

							?>


						</select>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Categories</label>
						<select name="cat" class="form-control">
							<option>Select Categories</option>

							<?php
							$get_cats="select * from categories";
							$run_cats=mysqli_query($con,$get_cats);
							while ($row=mysqli_fetch_array($run_cats)) {
							  	$id=$row['cat_id'];
							  	$cat_title=$row['cat_title'];
							  	echo "<option value='$id' > $cat_title </option>";
							  }  

							?>


						</select>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Product Image 1</label>
						<input type="file" name="product_img1" class="form-control" required="">
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Product Image 2</label>
						<input type="file" name="product_img2" class="form-control" required="">
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Product Image 3</label>
						<input type="file" name="product_img3" class="form-control" required="">
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Product Image 4</label>
						<input type="file" name="product_img4" class="form-control" required="">
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Product Image 5</label>
						<input type="file" name="product_img5" class="form-control" required="">
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Product Price</label>
						<input type="text" name="product_price" class="form-control" required="">
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Product Keyword</label>
						<input type="text" name="product_keyword" class="form-control" required="">
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Product Description</label>
						<textarea name="product_desc" class="form-control" rows="6" cols="19"></textarea>
					</div>
					<div class="form-group">
					
						<input type="submit" name="submit" value="Insert Product" class="btn btn-primary form-control">
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-lg-3">
		
	</div>
</div>



 

</body>
</html>

<?php
if (isset($_POST['submit'])) {
	$product_title=$_POST['product_title'];
	$artist_name=$_POST['artist_name'];
	$product_cat=$_POST['product_cat'];
	$cat=$_POST['cat'];
	$product_price=$_POST['product_price'];
	$product_desc=$_POST['product_desc'];
	$product_keyword=$_POST['product_keyword'];

	$product_img1=$_FILES['product_img1']['name'];
	$product_img2=$_FILES['product_img2']['name'];
	$product_img3=$_FILES['product_img3']['name'];
	$product_img4=$_FILES['product_img4']['name'];
	$product_img5=$_FILES['product_img5']['name'];

	$temp_name1=$_FILES['product_img1']['tmp_name'];
	$temp_name2=$_FILES['product_img2']['tmp_name'];
	$temp_name3=$_FILES['product_img3']['tmp_name'];
	$temp_name4=$_FILES['product_img4']['tmp_name'];
	$temp_name5=$_FILES['product_img5']['tmp_name'];

	move_uploaded_file($temp_name1, "product_images/$product_img1");
	move_uploaded_file($temp_name2, "product_images/$product_img2");
	move_uploaded_file($temp_name3, "product_images/$product_img3");
	move_uploaded_file($temp_name4, "product_images/$product_img4");
	move_uploaded_file($temp_name5, "product_images/$product_img5");

	$inset_product="insert into products(p_cat_id,cat_id,date,product_title,artist_name,product_img1,product_img2, product_img3, product_img4, product_img5,product_price,product_desc,product_keyword) values ('$product_cat','$cat',NOW(),'$product_title','$artist_name','$product_img1','$product_img2','$product_img3','$product_img4','$product_img5','$product_price','$product_desc','$product_keyword')";

	$run_product=mysqli_query($con,$inset_product);

	if ($run_product) {
	echo "<script>alert('Product Inserted Sucessfully')</script>";
	echo "<script>window.open('index.php?view_product')</script>";
	
	}
}

  ?>

  <?php } ?>