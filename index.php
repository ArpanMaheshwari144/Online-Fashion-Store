<!-- user - admin, password - admin -->
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>

    <!-- Slider Theme CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" />

    <!-- Slick CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" />

    <!-- Page Title -->
    <title>Fashion Store</title>

</head>

<body id="body">

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

            <!-- Carousel (Start) -->
            <div class="carousel slide py-2">
                <div class="carousel-inner front-carousel">
                    <img class="d-block w-100" src="images/slide/slide01.png" alt="First slide">
                    <img class="d-block w-100" src="images/slide/slide02.png" alt="Second slide">
                    <img class="d-block w-100" src="images/slide/slide03.png" alt="Third slide">
                </div>
                <a class="carousel-control-prev" href="#" id="previous-img">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#" id="next-img">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- Carousel (End) -->

            <br>

            <!-- Latest Products Carousel (Start) -->
            <div class="container-fluid new-arrivals" align="center">
                <hr class="w-25">
                <h1><label class="text-red mx-1">NEW</label><label class="mx-1">ARRIVALS</label></h1>
                <hr class="w-25">
                <div class="row" align="center">
                    <div class="col-1 d-flex justify-content-center align-items-center">
                        <button class="btn btn-danger ml-5 shadow" id="previous-slide">
                            < </button>
                    </div>
                    <div class="col-10 container-fluid py-5 product-slider-01">

                        <!-- Product Card (Start) -->
                        <a href="#" class="card-link product-card-link w-auto">
                            <div class="card product-card shadow">
                                <img src="images/products/product (1).jpg" class="img-fluid product-img">
                                <form action="cart.php" class="addtocart-form card-body pt-4 text-left">
                                    <button type="submit"
                                        class="btn bg-white mt-n5 float-right shadow addtocart-button"><img
                                            src="images/icons/cart.svg"></button>
                                    <h5>Mens Sport Shoes</h5>
                                    <label class="mb-n1">Rs.499</label>
                                    <div class="d-flex float-right mt-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                    </div>
                                </form>
                            </div>
                        </a>
                        <!-- Product Card (End) -->

                        <!-- Product Card (Start) -->
                        <a href="#" class="card-link product-card-link w-auto">
                            <div class="card product-card shadow">
                                <img src="images/products/product (2).jpg" class="img-fluid product-img">
                                <form action="cart.php" class="addtocart-form card-body pt-4 text-left">
                                    <button type="submit"
                                        class="btn bg-white mt-n5 float-right shadow addtocart-button"><img
                                            src="images/icons/cart.svg"></button>
                                    <h5>Mens Sport Shoes</h5>
                                    <label class="mb-n1">Rs.499</label>
                                    <div class="d-flex float-right mt-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                    </div>
                                </form>
                            </div>
                        </a>
                        <!-- Product Card (End) -->

                        <!-- Product Card (Start) -->
                        <a href="#" class="card-link product-card-link w-auto">
                            <div class="card product-card shadow">
                                <img src="images/products/product (3).jpg" class="img-fluid product-img">
                                <form action="cart.php" class="addtocart-form card-body pt-4 text-left">
                                    <button type="submit"
                                        class="btn bg-white mt-n5 float-right shadow addtocart-button"><img
                                            src="images/icons/cart.svg"></button>
                                    <h5>Mens Sport Shoes</h5>
                                    <label class="mb-n1">Rs.499</label>
                                    <div class="d-flex float-right mt-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                    </div>
                                </form>
                            </div>
                        </a>
                        <!-- Product Card (End) -->

                        <!-- Product Card (Start) -->
                        <a href="#" class="card-link product-card-link w-auto">
                            <div class="card product-card shadow">
                                <img src="images/products/product (4).jpg" class="img-fluid product-img">
                                <form action="cart.php" class="addtocart-form card-body pt-4 text-left">
                                    <button type="submit"
                                        class="btn bg-white mt-n5 float-right shadow addtocart-button"><img
                                            src="images/icons/cart.svg"></button>
                                    <h5>Mens Sport Shoes</h5>
                                    <label class="mb-n1">Rs.499</label>
                                    <div class="d-flex float-right mt-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                    </div>
                                </form>
                            </div>
                        </a>
                        <!-- Product Card (End) -->

                        <!-- Product Card (Start) -->
                        <a href="#" class="card-link product-card-link w-auto">
                            <div class="card product-card shadow">
                                <img src="images/products/product (5).jpg" class="img-fluid product-img">
                                <form action="cart.php" class="addtocart-form card-body pt-4 text-left">
                                    <button type="submit"
                                        class="btn bg-white mt-n5 float-right shadow addtocart-button"><img
                                            src="images/icons/cart.svg"></button>
                                    <h5>Mens Sport Shoes</h5>
                                    <label class="mb-n1">Rs.499</label>
                                    <div class="d-flex float-right mt-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                    </div>
                                </form>
                            </div>
                        </a>
                        <!-- Product Card (End) -->

                        <!-- Product Card (Start) -->
                        <a href="#" class="card-link product-card-link w-auto">
                            <div class="card product-card shadow">
                                <img src="images/products/product (6).jpg" class="img-fluid product-img">
                                <form action="cart.php" class="addtocart-form card-body pt-4 text-left">
                                    <button type="submit"
                                        class="btn bg-white mt-n5 float-right shadow addtocart-button"><img
                                            src="images/icons/cart.svg"></button>
                                    <h5>Mens Sport Shoes</h5>
                                    <label class="mb-n1">Rs.499</label>
                                    <div class="d-flex float-right mt-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                    </div>
                                </form>
                            </div>
                        </a>
                        <!-- Product Card (End) -->

                    </div>
                    <div class="col-1 d-flex justify-content-center align-items-center">
                        <button class="btn btn-danger mr-5" id="next-slide">></button>
                    </div>
                </div>
                <br>
            </div>
            <!-- Latest Products Carousel (End) -->

            <br>

            <!-- Information Row (Start) -->
            <div class="bg-red card-body pb-2" align="center">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 card-body">
                        <button class="btn bg-white p-3 shadow rounded-circle">
                            <img src="images/icons/car.svg" alt="shipping" class="img-fluid">
                        </button>
                        <h4 class="text-white mt-2">Fast Devlivery</h4>
                        <label class="text-white">Lorem ipsum dolor sit amet.</label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 card-body">
                        <button class="btn bg-white p-3 shadow rounded-circle">
                            <img src="images/icons/product.svg" alt="shipping" class="img-fluid">
                        </button>
                        <h4 class="text-white mt-2">Quality Products</h4>
                        <label class="text-white">Lorem ipsum dolor sit amet.</label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 card-body">
                        <button class="btn bg-white p-3 shadow rounded-circle">
                            <img src="images/icons/phone-call.svg" alt="shipping" class="img-fluid">
                        </button>
                        <h4 class="text-white mt-2">Customer Support</h4>
                        <label class="text-white">Lorem ipsum dolor sit amet.</label>
                    </div>
                </div>
            </div>
            <!-- Information Row (Start) -->

            <br>

            <!-- Explore Products Cards (Start) -->
            <div class="container-fluid py-5" align="center">
                <hr class="w-25">
                <h1><label class="text-red mx-1">EXPLORE</label><label class="mx-1">PRODUCTS</label></h1>
                <hr class="w-25">
                <div class="row w-100">
                    <div class="col-lg-6 col-md-6 col-sm-12 p-2">
                        <div class="card explore-product-cards border-0 shadow" id="explore-card-01">
                            <div class="card-body d-flex justify-content-center align-items-center">
                                <a href="#" class="card-link">
                                    <h1 class="font-weight-bold text-white display-4">JACKETS</h1>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 p-0">
                        <div class="col-12 p-2">
                            <div class="card explore-product-cards border-0 shadow" id="explore-card-02">
                                <div class="card-body d-flex justify-content-center align-items-center">
                                    <a href="#" class="card-link">
                                        <h1 class="font-weight-bold text-white display-4">SHOES</h1>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 p-2">
                            <div class="card explore-product-cards border-0 shadow" id="explore-card-03">
                                <div class="card-body d-flex justify-content-center align-items-center">
                                    <a href="#" class="card-link">
                                        <h1 class="font-weight-bold text-white display-4">JEANS</h1>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Explore Products Cards (End) -->

            <br>

            <!-- Brands (Start) -->
            <div class="container py-lg-5 py-md-3 py-sm-1" align="center">
                <hr class="w-25">
                <h2 class="text-red">Products From Top Brands</h2>
                <hr class="w-25">
                <img src="images/brands/brand1.png" alt="brand" class="d-inline-block mx-1">
                <img src="images/brands/brand2.png" alt="brand" class="d-inline-block mx-1">
                <img src="images/brands/brand3.png" alt="brand" class="d-inline-block mx-1">
                <img src="images/brands/brand4.png" alt="brand" class="d-inline-block mx-1">
                <img src="images/brands/brand5.png" alt="brand" class="d-inline-block mx-1">
            </div>
            <!-- Brands (End) -->

            <br>

            <!-- Exclusive Div (Start) -->
            <div class="card-body exclusive-div" id="exclusive-div">
                <div class="card-body h-100 w-100">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <h1 class="text-white display-3">EXCLUSIVE FASHION RANGE</h1>
                            <hr class="bg-white w-100">
                            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <hr class="bg-white w-25">
                            <a href="#" class="btn btn-lg text-red bg-white shadow px-5">EXPLORE</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Exclusive Div (End) -->

            <br>

            <!-- Recomended Product (Start) -->
            <div class="container-fluid" align="center">
                <hr class="w-25">
                <h1><label class="text-red mx-1">RECOMENDED</label><label class="mx-1">PRODUCT</label></h1>
                <hr class="w-25">
                <div class="row" align="center">
                    <div class="col-1 d-flex justify-content-center align-items-center">
                        <button class="btn btn-danger ml-5 shadow previous-slide">
                            < </button>
                    </div>
                    <div class="col-10 container-fluid py-5 product-slider-02">

                        <!-- Product Card (Start) -->
                        <a href="#" class="card-link product-card-link w-auto">
                            <div class="card product-card shadow">
                                <img src="images/products/product (1).jpg" class="img-fluid product-img">
                                <form action="cart.php" class="addtocart-form card-body pt-4 text-left">
                                    <button type="submit"
                                        class="btn bg-white mt-n5 float-right shadow addtocart-button"><img
                                            src="images/icons/cart.svg"></button>
                                    <h5>Mens Sport Shoes</h5>
                                    <label class="mb-n1">Rs.499</label>
                                    <div class="d-flex float-right mt-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                    </div>
                                </form>
                            </div>
                        </a>
                        <!-- Product Card (End) -->

                        <!-- Product Card (Start) -->
                        <a href="#" class="card-link product-card-link w-auto">
                            <div class="card product-card shadow">
                                <img src="images/products/product (2).jpg" class="img-fluid product-img">
                                <form action="cart.php" class="addtocart-form card-body pt-4 text-left">
                                    <button type="submit"
                                        class="btn bg-white mt-n5 float-right shadow addtocart-button"><img
                                            src="images/icons/cart.svg"></button>
                                    <h5>Mens Sport Shoes</h5>
                                    <label class="mb-n1">Rs.499</label>
                                    <div class="d-flex float-right mt-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                    </div>
                                </form>
                            </div>
                        </a>
                        <!-- Product Card (End) -->

                        <!-- Product Card (Start) -->
                        <a href="#" class="card-link product-card-link w-auto">
                            <div class="card product-card shadow">
                                <img src="images/products/product (3).jpg" class="img-fluid product-img">
                                <form action="cart.php" class="addtocart-form card-body pt-4 text-left">
                                    <button type="submit"
                                        class="btn bg-white mt-n5 float-right shadow addtocart-button"><img
                                            src="images/icons/cart.svg"></button>
                                    <h5>Mens Sport Shoes</h5>
                                    <label class="mb-n1">Rs.499</label>
                                    <div class="d-flex float-right mt-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                    </div>
                                </form>
                            </div>
                        </a>
                        <!-- Product Card (End) -->

                        <!-- Product Card (Start) -->
                        <a href="#" class="card-link product-card-link w-auto">
                            <div class="card product-card shadow">
                                <img src="images/products/product (4).jpg" class="img-fluid product-img">
                                <form action="cart.php" class="addtocart-form card-body pt-4 text-left">
                                    <button type="submit"
                                        class="btn bg-white mt-n5 float-right shadow addtocart-button"><img
                                            src="images/icons/cart.svg"></button>
                                    <h5>Mens Sport Shoes</h5>
                                    <label class="mb-n1">Rs.499</label>
                                    <div class="d-flex float-right mt-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                    </div>
                                </form>
                            </div>
                        </a>
                        <!-- Product Card (End) -->

                        <!-- Product Card (Start) -->
                        <a href="#" class="card-link product-card-link w-auto">
                            <div class="card product-card shadow">
                                <img src="images/products/product (5).jpg" class="img-fluid product-img">
                                <form action="cart.php" class="addtocart-form card-body pt-4 text-left">
                                    <button type="submit"
                                        class="btn bg-white mt-n5 float-right shadow addtocart-button"><img
                                            src="images/icons/cart.svg"></button>
                                    <h5>Mens Sport Shoes</h5>
                                    <label class="mb-n1">Rs.499</label>
                                    <div class="d-flex float-right mt-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                    </div>
                                </form>
                            </div>
                        </a>
                        <!-- Product Card (End) -->

                        <!-- Product Card (Start) -->
                        <a href="#" class="card-link product-card-link w-auto">
                            <div class="card product-card shadow">
                                <img src="images/products/product (6).jpg" class="img-fluid product-img">
                                <form action="cart.php" class="addtocart-form card-body pt-4 text-left">
                                    <button type="submit"
                                        class="btn bg-white mt-n5 float-right shadow addtocart-button"><img
                                            src="images/icons/cart.svg"></button>
                                    <h5>Mens Sport Shoes</h5>
                                    <label class="mb-n1">Rs.499</label>
                                    <div class="d-flex float-right mt-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                        <img src="images/icons/star.svg" class="ml-1">
                                    </div>
                                </form>
                            </div>
                        </a>
                        <!-- Product Card (End) -->

                    </div>
                    <div class="col-1 d-flex justify-content-center align-items-center">
                        <button class="btn btn-danger mr-5 next-slide">></button>
                    </div>
                </div>
            </div>
            <!-- Recomended Product (End) -->

            <br>

            <!-- News Letters and Updates (Start) -->
            <div class="bg-red card-body pb-1 my-lg-5 my-md-3 my-sm-1" align="center">
                <form class="form-group container w-100 px-lg-5 px-md-5 px-sm-0" id="news-letter-form">
                    <h5 class="text-white">Get News Letters and Updates</h5>
                    <div
                        class="input-group-prepend input-group-append d-flex justify-content-center align-items-center mx-lg-5 mx-md-5 mx-sm-0">
                        <input type="email" name="email"
                            class="input-group-text bg-white w-75 mx-1 shadow text-red text-left"
                            placeholder="Enter Your Email">
                        <button type="submit" class="btn btn-red border-light w-25 mx-1 shadow">SUBSCRIBE</button>
                    </div>
                    <p class="text-white mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    </p>
                </form>
            </div>
            <!-- News Letters and Updates (End) -->

            <br>

            <!-- Customer Review (Start) -->
            <div class="container" align="center">
                <hr class="w-25">
                <h3><label class="text-red mx-1">CUSTOMER</label><label class="mx-1">REVIEWS</label></h3>
                <hr class="w-25">
                <div class="container-fluid customer-review py-3">
                    <div class="card bg-light-red border-0">
                        <div class="card-body">
                            <img src="images/customers/customer (1).jpg"
                                class="img-fluid img-thumbnail rounded-circle customer-img my-2">
                            <h4>Amanda Jepson</h4>
                            <i>
                                <h4 class="text-red">" Lorem ipsum dolor sit amet, consectetur adipisicing elit "</h4>
                            </i>
                        </div>
                    </div>
                    <div class="card bg-light-red border-0">
                        <div class="card-body">
                            <img src="images/customers/customer (2).jpg"
                                class="img-fluid img-thumbnail rounded-circle customer-img my-2">
                            <h4>Walter White</h4>
                            <i>
                                <h4 class="text-red">" Lorem ipsum dolor sit amet, consectetur adipisicing elit "</h4>
                            </i>
                        </div>
                    </div>
                    <div class="card bg-light-red border-0">
                        <div class="card-body">
                            <img src="images/customers/customer (3).jpg"
                                class="img-fluid img-thumbnail rounded-circle customer-img my-2">
                            <h4>Sarah Jhonson</h4>
                            <i>
                                <h4 class="text-red">" Lorem ipsum dolor sit amet, consectetur adipisicing elit "</h4>
                            </i>
                        </div>
                    </div>
                    <div class="card bg-light-red border-0">
                        <div class="card-body">
                            <img src="images/customers/customer (4).jpg"
                                class="img-fluid img-thumbnail rounded-circle customer-img my-2">
                            <h4>William Anderson</h4>
                            <i>
                                <h4 class="text-red">" Lorem ipsum dolor sit amet, consectetur adipisicing elit "</h4>
                            </i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Customer Review (End) -->

            <br>

            <!-- Free Delivery (Start) -->
            <div class="container py-3" align="center">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 card-body">
                        <h1>Get</h1>
                        <h1 class="text-red display-4 font-weight-bold">Free Delivery</h1>
                        <h1>on order Rs.1000+</h1>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 card-body">
                        <img src="images/slide/delivery.png" class="img-fluid w-75 h-auto">
                    </div>
                </div>
            </div>
            <!-- Free Delivery (End) -->

            <br>

            <br>
        </section>
        <!-- Section (End) -->

        <?php  
		include 'footer.php';
		?>

    </header>
    <!-- Header (End) -->


    <script src="js/script.js"></script>

    <script>
    $(document).ready(function() {

        $('#preloader-div').hide();

        $('#popup-close-button').click(function() {
            $('#popup-div').fadeOut(300);
            $('#search-card').hide();
            $('#signup-card').hide();
            $('#login-card').hide();
        });

        // Login Card 
        $('#login-popup-toggler').click(function() {
            $('#popup-div').fadeIn(300);
            $('#signup-card').hide();
            $('#search-card').hide();
            $('#login-card').fadeIn(300);
        });
        $('#refer-signup').click(function() {
            $('#login-card').hide();
            $('#signup-card').fadeIn(300);
        });

        // Signup Card
        $('#signup-popup-toggler').click(function() {
            $('#popup-div').fadeIn(300);
            $('#login-card').hide();
            $('#search-card').hide();
            $('#signup-card').fadeIn(300);
        });
        $('#refer-login').click(function() {
            $('#signup-card').hide();
            $('#login-card').fadeIn(300);
        });

        // Sidebar Toggler
        $('#sidebar-toggler').click(function() {
            $('#sidebar').toggleClass('active');
        });

        // Search Card Toggler
        $('#search-bar-toggler').click(function() {
            $('#popup-div').fadeIn(300);
            $('#signup-card').hide();
            $('#login-card').hide();
            $('#search-card').fadeIn(300);
            $('#search-bar-text').focus();
        });

    });
    </script>
    <!-- JQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Slick Slider JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
        integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
        crossorigin="anonymous"></script>


    <!-- Slick Slider Script (Start) -->
    <script type="text/javascript">
    $('.front-carousel').slick({
        speed: 700,
        autoplay: true,
        autoplaySpeed: 2000,
        nextArrow: '#next-img',
        prevArrow: '#previous-img'
    });

    $('.product-slider-01').slick({
        speed: 700,
        slidesToShow: 3,
        slidesToScroll: 3,
        nextArrow: '#next-slide',
        prevArrow: '#previous-slide',
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    $('.product-slider-02').slick({
        speed: 700,
        slidesToShow: 3,
        slidesToScroll: 3,
        nextArrow: '.next-slide',
        prevArrow: '.previous-slide',
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    $('.customer-review').slick({
        dots: true,
        slidesToShow: 1,
        autoplay: true,
        autoplaySpeed: 2000
    });
    $('.explore-products').slick({
        dots: true,
        speed: 700,
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1000,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    </script>
    <!-- Slick Slider Script (End) -->

</body>
<!-- JQuery CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</html>