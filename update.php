<?php 


$con = mysqli_connect('localhost','root','root','shopping');
 if($con){

 echo " Database connection is succesfully.";

 }
 else{
  echo "connection is not established.";
 }

// mysqli_select_db($con,'shopping');

 	 $pid = $_GET['pid'];	

 	 $pname = $_POST['pname'];
 	 $pdesc = $_POST['pdesc'];
 	 $price = $_POST['price'];
 

 $query = "update carddata2 set pid=$pid, pname='$pname', pdesc='$pdesc', price=$price where pid=$pid";

	$q = mysqli_query($con,$query);

	// header('location:update.php');


?>
















<!DOCTYPE html>
<html>
<head>
	<title>Upadte</title>


		<!---FontAwsom CDN--->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />

  <!---Bootstrap CDN--->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="style.css"/>
</head>
<body>
	<br><section class="my-5">
		<div class="dy-5">
		<h2 class="text-center">Update Your Product..</h2>	
		</div>
		<div class="w-50 m-auto">

		<form action="dbcon.php" method="post">
				
        <div class="form-group">
        <label>Product ID</label>
        <input type="text" name="pid" autocomplete="off" class="form-control">
      </div>

	<div class="form-group">
		<label>Product Name</label>
		<input type="text" name="pname" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Product Description</label>
				<input type="text" name="pdesc" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Product Price</label>
				<input type="text" name="price" autocomplete="off" class="form-control">
			</div>
			 <button type="submit"  href="fetchdata.php"  class="btn btn-primary">Upadate the Card</button>
       <span id="error_message" class="text-danger"></span>
        <span id="success_message" class="text-success"></span>


        <a href="fetchdata.php" class="btn btn-info" role="button">See Update</a><br></br></form>
		<a href="index.php"></a>

	</div>
</section></br>


<!---JQuery CDN--->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>