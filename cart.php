<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicon -->
	<link rel=icon href="images/logo.png">

	<!-- Google Fonts CDN -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	
	<!-- CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

	<!-- Slider Theme CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />

	<!-- Slick CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />
	
	<!-- Page Title -->
	<title>My Cart | Fashion Store</title>

</head>
<body>

	<div class="preloader-div" id="preloader-div">
		<div class="container-fluid inside-loader d-flex justify-content-center align-items-center">
			<div id="preloader"></div>
		</div>
	</div>

	<?php 
	include 'popup.php';
	?>

	<!-- Header (Start) -->
	<header class="main animated fadeIn" id="main">

		<?php 
			include 'navbar.php';
		?>

		<?php 
			include 'sidebar.php';
		?>

		<!-- Section (Start) -->
		<section class="home-section" id="home-section">
			<br>
			<br>
			<br>
			<br>

			<!-- My Cart Title -->
			<div class="card-body pb-0">
				<div class="container-fluid" align="center">
					<h2 class="font-weight-bolder text-red d-inline-block m-1">My Shoping Cart</h2>
					<h3 class="font-weight-bolder d-inline-block m-1">(3 Items)</h3>
				</div>
			</div>

			<div class="container-fluid">
				<div class="row">

					<!-- Items Section (Start) -->
					<div class="col-lg-8 col-md-12 col-sm-12 card-body">

						<!-- Product Card (Start) -->
						<form class="card border-danger bg-light-red my-4">
							<div class="row card-body pb-0 text-lg-left text-md-left text-sm-center">
								<div class="col-lg-3 col-md-5 col-sm-12 card-body" align="center">
									<img src="images/products/product (2).jpg" class="img-fluid img-thumbnail cart-thumbnail-img"><br>
									<label class="mt-2">Quantity</label>
									<table class="quantity-table">
										<tr>
											<td class="text-white btn btn-red btn-outline-danger decreaseQuantity">-</td>
											<td class="quantity-number px-2"><input type="number" min="1" max="20" name="quantity" value="1" class="input-group-text bg-white"></td>
											<td class="text-white btn btn-red btn-outline-danger increaseQuantity">+</td>
										</tr>
									</table>
								</div>
								<div class="col-lg-9 col-md-7 col-sm-12 card-body">
									<a href="#" class="card-link text-dark font-weight-bolder"><h3>Mens Sports Shoes</h3></a>
									<h5 class="mr-1 d-inline-block">Size :</h5>
									<select class="custom-select w-auto border-0 my-1 d-inline-block font-weight-bold text-dark" name="size">
										<option>5</option>
										<option>6</option>
										<option>7</option>
										<option>8</option>
									</select><br>
									<label>Category : Shoes</label><br>
									<label>Sold By : Fashion Store</label><br>
									<h3>Price : Rs.499</h3>
									<div class="d-flex justify-content-end align-items-baseline">
										<a href="#" class="btn btn-lg btn-red btn-outline-danger mt-2 mr-1">Remove</a>
										<button type="submit" class="btn btn-lg btn-red btn-outline-danger mt-2 ml-1">Buy Now</button>
									</div>
									
								</div>
							</div>
						</form>
						<!-- Product Card (End) -->


						<!-- Product Card (Start) -->
						<form class="card border-danger bg-light-red my-4">
							<div class="row card-body pb-0 text-lg-left text-md-left text-sm-center">
								<div class="col-lg-3 col-md-5 col-sm-12 card-body" align="center">
									<img src="images/products/product (2).jpg" class="img-fluid img-thumbnail cart-thumbnail-img"><br>
									<label class="mt-2">Quantity</label>
									<table class="quantity-table">
										<tr>
											<td class="text-white btn btn-red btn-outline-danger decreaseQuantity">-</td>
											<td class="quantity-number px-2"><input type="number" min="1" max="20" name="quantity" value="1" class="input-group-text bg-white"></td>
											<td class="text-white btn btn-red btn-outline-danger increaseQuantity">+</td>
										</tr>
									</table>
								</div>
								<div class="col-lg-9 col-md-7 col-sm-12 card-body">
									<a href="#" class="card-link text-dark font-weight-bolder"><h3>Mens Sports Shoes</h3></a>
									<h5 class="mr-1 d-inline-block">Size :</h5>
									<select class="custom-select w-auto border-0 my-1 d-inline-block font-weight-bold text-dark" name="size">
										<option>5</option>
										<option>6</option>
										<option>7</option>
										<option>8</option>
									</select><br>
									<label>Category : Shoes</label><br>
									<label>Sold By : Fashion Store</label><br>
									<h3>Price : Rs.499</h3>
									<div class="d-flex justify-content-end align-items-baseline">
										<a href="#" class="btn btn-lg btn-red btn-outline-danger mt-2 mr-1">Remove</a>
										<button type="submit" class="btn btn-lg btn-red btn-outline-danger mt-2 ml-1">Buy Now</button>
									</div>
									
								</div>
							</div>
						</form>
						<!-- Product Card (End) -->

						<!-- Product Card (Start) -->
						<form class="card border-danger bg-light-red my-4">
							<div class="row card-body pb-0 text-lg-left text-md-left text-sm-center">
								<div class="col-lg-3 col-md-5 col-sm-12 card-body" align="center">
									<img src="images/products/product (2).jpg" class="img-fluid img-thumbnail cart-thumbnail-img"><br>
									<label class="mt-2">Quantity</label>
									<table class="quantity-table">
										<tr>
											<td class="text-white btn btn-red btn-outline-danger decreaseQuantity">-</td>
											<td class="quantity-number px-2"><input type="number" min="1" max="20" name="quantity" value="1" class="input-group-text bg-white"></td>
											<td class="text-white btn btn-red btn-outline-danger increaseQuantity">+</td>
										</tr>
									</table>
								</div>
								<div class="col-lg-9 col-md-7 col-sm-12 card-body">
									<a href="#" class="card-link text-dark font-weight-bolder"><h3>Mens Sports Shoes</h3></a>
									<h5 class="mr-1 d-inline-block">Size :</h5>
									<select class="custom-select w-auto border-0 my-1 d-inline-block font-weight-bold text-dark" name="size">
										<option>5</option>
										<option>6</option>
										<option>7</option>
										<option>8</option>
									</select><br>
									<label>Category : Shoes</label><br>
									<label>Sold By : Fashion Store</label><br>
									<h3>Price : Rs.499</h3>
									<div class="d-flex justify-content-end align-items-baseline">
										<a href="#" class="btn btn-lg btn-red btn-outline-danger mt-2 mr-1">Remove</a>
										<button type="submit" class="btn btn-lg btn-red btn-outline-danger mt-2 ml-1">Buy Now</button>
									</div>
									
								</div>
							</div>
						</form>
						<!-- Product Card (End) -->


					</div>
					<!-- Items Section (End) -->

					<!-- Billing Section (Start) -->
					<div class="col-lg-4 col-md-12 col-sm-12 card-body">
						<div class="card bg-light-red border-danger my-lg-4 mt-md-1 mt-sm-0">
							<div class="card-body">
								<h3 class="text-center d-inline-block">Place Order</h3><h5 class="d-inline-block mx-2">(3 Items)</h5>
								<hr class="mt-1">
								<div class="row">
									<div class="col-6">
										<h5 class="float-left">Mens Sports Shoes</h5>
									</div>
									<div class="col-6">
										<h5 class="float-right">Rs.499</h5>
									</div>
								</div>
								<div class="row">
									<div class="col-6">
										<h5 class="float-left">Mens Sports Shoes</h5>
									</div>
									<div class="col-6">
										<h5 class="float-right">Rs.499</h5>
									</div>
								</div>
								<div class="row">
									<div class="col-6">
										<h5 class="float-left">Mens Sports Shoes</h5>
									</div>
									<div class="col-6">
										<h5 class="float-right">Rs.499</h5>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-6">
										<h5 class="float-left">Total : </h5>
									</div>
									<div class="col-6">
										<h5 class="float-right">Rs.998</h5>
									</div>
								</div>
								<hr class="mt-2">
								<a href="#" class="btn btn-red btn-outline-danger btn-lg">Continue</a>
							</div>
						</div>
					</div>
					<!-- Billing Section (End) -->

				</div>
			</div>

			<br>
		</section>
		<!-- Section (End) -->

		<!-- Footer (Start) -->
		<footer id="footer">
			<div class="card-body">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6">
						
					</div>
				</div>
			</div>
		</footer>
		<!-- Footer (End) -->
			
	</header>
	<!-- Header (End) -->


<script src="js/script.js"></script>

<script>
$(document).ready(function() {

	$('#preloader-div').hide();

	$('#popup-close-button').click(function(){
		$('#popup-div').fadeOut(300);
		$('#search-card').hide();
		$('#signup-card').hide();
		$('#login-card').hide();
	});

	// Login Card 
	$('#login-popup-toggler').click(function(){
		$('#popup-div').fadeIn(300);
		$('#signup-card').hide();
		$('#search-card').hide();
		$('#login-card').fadeIn(300);
	});
	$('#refer-signup').click(function(){
		$('#login-card').hide();
		$('#signup-card').fadeIn(300);
	});

	// Signup Card
	$('#signup-popup-toggler').click(function(){
		$('#popup-div').fadeIn(300);
		$('#login-card').hide();
		$('#search-card').hide();
		$('#signup-card').fadeIn(300);
	});
	$('#refer-login').click(function(){
		$('#signup-card').hide();
		$('#login-card').fadeIn(300);
	});

	// Sidebar Toggler
	$('#sidebar-toggler').click(function(){
		$('#sidebar').toggleClass('active');
	});

	// Search Card Toggler
	$('#search-bar-toggler').click(function(){
		$('#popup-div').fadeIn(300);
		$('#signup-card').hide();
		$('#login-card').hide();
		$('#search-card').fadeIn(300);
		$('#search-bar-text').focus();
	});

	// Product Quantity Controller
	$('.quantity-table').ready(function(){
		$(this).find('td.decreaseQuantity').click(function(){
			let quantity = $(this).parent().find('td.quantity-number input').val();
			quantity = parseInt(quantity);
			if (quantity > 1) {
				quantity = quantity - 1;
				$(this).parent().find('td.quantity-number input').val(quantity);
			}
		});
		$(this).find('td.increaseQuantity').click(function(){
			let quantity = $(this).parent().find('td.quantity-number input').val();
			quantity = parseInt(quantity);
			if (quantity < 20) {	
				quantity = quantity + 1;
				$(this).parent().find('td.quantity-number input').val(quantity);
			}
		});
	});

});
</script>
<!-- JQuery CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Slick Slider JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous"></script>
</body>
<!-- JQuery CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</html>


