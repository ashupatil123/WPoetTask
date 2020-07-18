
<?php

$con = mysqli_connect('localhost','root','root','shopping');
 if
($con){

 // echo " Databse connection is succesfull.";

 }
 else{
  echo "connection is not established.";
 }


function ShowData(){

	global $con;
	$query = "SELECT * FROM `carddata2` order by pid ASC ";
	$run = mysqli_query($con,$query);

	if($run == TRUE){
	?>
	<div class="text-center">
	<table border="1" width="80%">
		<th class="bg-dark text-white">Product ID</th>
		<th class="bg-dark text-white">Product Name</th>
		<th class="bg-dark text-white">Product Description</th>
		<th class="bg-dark text-white">Product Price</th>
		<th class="bg-dark text-white">Product Delete</th>
		<th class="bg-dark text-white">Product Update</th>
	<?php
	while($data = mysqli_fetch_assoc($run)){

		?>
		
			<tr>
				<td><?php echo $data['pid'];?></td>
				<td><?php echo $data['pname'];?></td>
				<td><?php echo $data['pdesc'];?></td>
				<td><?php echo $data['price'];?></td>

			<td><button class="btn-danger btn"><a href="delete.php?pid=<?php echo $data['pid']; ?>" class="text-white">Delete</a></button></td>

			<td><button class="btn-primary btn"><a href="update.php?pid=<?php echo $data['pid']; ?>"class="text-white">Update Record</a></button></td>
			</tr>
</div>
		<?php
		}

		?></table> <?php
	}
	else{
		echo "Error !!";
		}


}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Show Data</title>
	<!---FontAwsom CDN--->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />

  <!---Bootstrap CDN--->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>



<nav class="navbar navbar-dark bg-info">
  <h3><a href="#"class="nav-item nav-link active"></a><i class="fas fa-shopping-basket ml-1"></i>Carts Data..</h3></a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#"><i class="fa fas fa-cart-plus ml-2"></i><br></br>Our Brands</a>
   
    
  </div>
</nav>



<?php ShowData(); ?>
<br></br>
 <a href="add.php" class="btn btn-info" role="button">Back..</a><br></br>
<!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="index.php"> Shopping.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->





<!---JQuery CDN--->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


