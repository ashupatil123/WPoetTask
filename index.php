
<?php include("header.php") ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="apple-touch-icon" sizes="76x76" href="../sample2/favicon icon/android-icon-72x72.png">
</head>
<body>
  
  
<!--Carousel Wrapper-->
<div id="video-carousel-example2"class="carousel slide carousel-fade" data-ride="carousel"  style="width=200px !important:">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#video-carousel-example2" data-slide-to="0" class="active"></li>
    <li data-target="#video-carousel-example2" data-slide-to="1"></li>
    <li data-target="#video-carousel-example2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <!-- First slide -->
    <div class="carousel-item active">
      <!--Mask color-->
      <div class="view">
        <!--Video source-->
        <video class="video-fluid" autoplay loop muted>
          <source src="https://mdbootstrap.com/img/video/Lines.mp4" type="video/mp4" />
        </video>
        <div class="mask rgba-indigo-light"></div>
      </div>

      <!--Caption-->
      <div class="carousel-caption text-center">
        <div class="animated fadeInDown">
          <h3 class="h3-responsive" style="color:black;">ShopMask</h3>
          <p>First text</p>
        </div>
      </div>
      <!--Caption-->
    </div>
    <!-- /.First slide -->

    <!-- Second slide -->
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <!--Video source-->
        <video class="video-fluid" autoplay loop muted>
          <source src="https://mdbootstrap.com/img/video/animation-intro.mp4" type="video/mp4" />
        </video>
        <div class="mask rgba-purple-slight"></div>
      </div>

      <!--Caption-->
      <div class="carousel-caption">
        <div class="animated fadeInDown">
          <h3 class="h3-responsive" style="color:black;">Super light Collection</h3>
          <p>Secondary text</p>
        </div>
      </div>
      <!--Caption-->
    </div>
    <!-- /.Second slide -->

    <!-- Third slide -->
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <!--Video source-->
        <video class="video-fluid" autoplay loop muted>
          <source src="https://mdbootstrap.com/img/video/Tropical.mp4" type="video/mp4" />
        </video>
        <div class="mask rgba-black-strong"></div>
      </div>

      <!--Caption-->
      <div class="carousel-caption">
        <div class="animated fadeInDown">
          <h3 class="h3-responsive" style="color:black;">Now To Connect With Us</h3>
          <p>Third text</p>
        </div>
      </div>
      <!--Caption-->
    </div>
    <!-- /.Third slide -->
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#video-carousel-example2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#video-carousel-example2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--Carousel Wrapper-->
 
<!---End corousel----->


<div class="container">
		<div class="row text-center py-5">

			<div class="col-lg-4 col-md-4 ">
				<form action="add.php" method="post">
					<div class="card shadow">
						<div>
							<img src="img/img1.jpg" alt="Image" class="img-fluid Cart-img-top">
						</div>
						<div class="card-body">
							<h5 class="card-title">iPHONE</h5>
							<h6>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="far fa-star"></i>
							</h6>
							<p class="card-text">Type of Service(Handset).Repair service carried at Samsung authorized service center Additional Information product Developed in Delhi. </p>
							<h5>
								<small><s class="text-secondary">$4000</s></small>
								<span class="price">$3000</span>
							</h5>
							<button type="submit" href="dbcon.php" class="btn btn-warning my-3" name="add">Add To Cart <i class="fas fa-shopping-cart"></i></button>
						</div>
					</div>
				</form>
			</div>

			<div class="col-lg-4 col-md-4 ">
				<form action="add.php" method="post">
					<div class="card shadow">
						<div>
							<img src="img/img2.jpg" alt="Image" class="img-fluid Cart-img-top">
						</div>
						<div class="card-body">
							<h5 class="card-title">LAPTOP</h5>
							<h6>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="far fa-star"></i>
							</h6>
							<p class="card-text">Type of Service(Handset).Repair service carried at Samsung authorized service center Additional Information. </p>
							<h5>
								<small><s class="text-secondary">$3000</s></small>
								<span class="price">$20000</span>
							</h5>
							<button type="submit" class="btn btn-warning my-3" name="add">Add To Cart <i class="fas fa-shopping-cart"></i></button>
						</div>
					</div>
				</form>
			</div>

			<div class="col-lg-4 col-md-4">
				<form action="add.php" method="post">
					<div class="card shadow">
						<div>
							<img src="img/img11.jpg" alt="Image" class="img-fluid Cart-img-top">
						</div>
						<div class="card-body">
							<h5 class="card-title">SKY BAGS</h5>
							<h6>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="far fa-star"></i>
							</h6>
							<p class="card-text">Type of Service(Handset).Repair service carried in Delhi. </p>
							<h5>
								<small><s class="text-secondary">$7000</s></small>
								<span class="price">$4000</span>
							</h5>
							<button type="submit" class="btn btn-warning my-3" name="add">Add To Cart <i class="fas fa-shopping-cart"></i></button>
						</div>
					</div>
				</form>
			</div>

			<div class="col-lg-4 col-md-4">
				<form action="add.php" method="post">
					<div class="card shadow">
						<div>
							<img src="img/img4.jpg" alt="Image" class="img-fluid Cart-img-top">
						</div>
						<div class="card-body">
							<h5 class="card-title">STRAITNER</h5>
							<h6>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="far fa-star"></i>
							</h6>
							<p class="card-text">Type of Service(Handset).Repair service carried at Samsung authorized service center Additional Information. </p>
							<h5>
								<small><s class="text-secondary">$200</s></small>
								<span class="price">$100</span>
							</h5>
							<button type="submit" class="btn btn-warning my-3" name="add">Add To Cart <i class="fas fa-shopping-cart"></i></button>
						</div>
					</div>
				</form>
			</div>


      <div class="col-lg-4 col-md-4">
        <form action="add.php" method="post">
          <div class="card shadow">
            <div>
              <img src="img/img4.jpg" alt="Image" class="img-fluid Cart-img-top">
            </div>
            <div class="card-body">
              <h5 class="card-title">STRAITNER</h5>
              <h6>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </h6>
              <p class="card-text">Type of Service(Handset).Repair service carried at Samsung authorized service center Additional Information. </p>
              <h5>
                <small><s class="text-secondary">$200</s></small>
                <span class="price">$100</span>
              </h5>
              <button type="submit" class="btn btn-warning my-3" name="add">Add To Cart <i class="fas fa-shopping-cart"></i></button>
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-4 col-md-4">
        <form action="add.php" method="post">
          <div class="card shadow">
            <div>
              <img src="img/img4.jpg" alt="Image" class="img-fluid Cart-img-top">
            </div>
            <div class="card-body">
              <h5 class="card-title">STRAITNER</h5>
              <h6>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </h6>
              <p class="card-text">Type of Service(Handset).Repair service carried at Samsung authorized service center Additional Information. </p>
              <h5>
                <small><s class="text-secondary">$200</s></small>
                <span class="price">$100</span>
              </h5>
              <button type="submit" class="btn btn-warning my-3" name="add">Add To Cart <i class="fas fa-shopping-cart"></i></button>
            </div>
          </div>
        </form>
      </div>
		</div>
	</div>


<!-- Footer -->
<footer class="page-footer font-small blue-grey lighten-5">

  <div style="background-color: #21d192;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">Get connected with us on social networks...!</h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right">

          <!-- Facebook -->
          <a href="https://www.facebook.com/" class="fb-ic">
            <i class="fab fa-facebook-f white-text mr-4"> </i>
          </a>
          <!-- Twitter -->
          <a href="https://twitter.com/" class="tw-ic">
            <i class="fab fa-twitter white-text mr-4"> </i>
          </a>
          <!-- Google +-->
          <a href="https://www.google.com/" class="gplus-ic">
            <i class="fab fa-google-plus-g white-text mr-4"> </i>
          </a>
          <!--Linkedin -->
          <a href="https://www.linkedin.com/" class="li-ic">
            <i class="fab fa-linkedin-in white-text mr-4"> </i>
          </a>
          <!--Instagram-->
          <a href="https://www.instagram.com/" class="ins-ic">
            <i class="fab fa-instagram white-text"> </i>
          </a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3 dark-grey-text">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">Company name</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
          consectetur
          adipisicing elit.</p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Products</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a class="dark-grey-text" href="laptop.php">Laptops</a>
        </p>
        <p>
          <a class="dark-grey-text" href="sport.php">Spots Instruments</a>
        </p>
        <p>
          <a class="dark-grey-text" href="clothe.php">Clothes</a>
        </p>
        <p>
          <a class="dark-grey-text" href="skinp.php">SkinCare</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Useful links</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a class="dark-grey-text" href="#!">Your Account</a>
        </p>
        <p>
          <a class="dark-grey-text" href="#!">Become an Affiliate</a>
        </p>
        <p>
          <a class="dark-grey-text" href="#!">Shipping Rates</a>
        </p>
        <p>
          <a class="dark-grey-text" href="#!">Help</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contact</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> info@example.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
        <p>
          <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center text-black-50 py-3">© 2020 Copyright:
    <a class="dark-grey-text" href="index.php"> Shopping.com</a>
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