<html>
<head>
  <title>Add Card</title>

  <!---FontAwsom CDN--->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />

  <!---Bootstrap CDN--->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="style.css"/>
</head>
<body class="pink-skin">

<nav class="navbar navbar-dark bg-info">
  <h3><a href="#"class="nav-item nav-link active"></a><i class="fas fa-shopping-basket ml-1"></i> Adding Shopping Carts</h3></a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#"><i class="fa fas fa-cart-plus ml-2"></i><br></br>Our Brands</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="link.php">Link<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="sport.php">Sports Arts</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="jelly.php">Jewellary Arts</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<br><section class="my-5">
	<div class="dy-5">
	<h2 class="text-center">Adding Your Product..</h2>	
	</div>
	<div class="w-50 m-auto">

		<form action="dbcon.php" method="post">
			<div class="form-group">
				<br><label>Product Image</label></br>
				<a href="imgupload.php" class="btn btn-primary">Upload image</a>
				
			</div>
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
			 <button type="submit" href="dbcon.php" class="btn btn-primary">Adding the Card</button>
       <span id="error_message" class="text-danger"></span>
        <span id="success_message" class="text-success"></span>


        <a href="fetchdata.php" class="btn btn-info" role="button">See Update</a><br></br>

      

		</form>
		<a href="index.php"></a>

	</div>
</section></br>

<!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
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


