<!-- Navigation Bar (Start) -->
<nav class="navbar navbar-expand-md bg-white shadow fixed-top">
    <div class="container-fluid"></div>

    <!-- Sidebar Toggler Button -->
    <button class="btn bg-transparent btn-outline-light border-0" id="sidebar-toggler">
        <img src="images/icons/menu.svg">
    </button>

    <!-- Brand Logo -->
    <a href="index.php" class="navbar-brand mr-auto mt-2"><label class="logo-text1">Fashion</label><label
            class="logo-text2">Store</label></a>

    <!-- Linked List -->
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item nav-linkedList"><a href="index.php" class="nav-link">HOME</a></li>
            <li class="nav-item nav-linkedList dropdown" id="categories-dropdown-toggler">
                <a href="#" class="nav-link">CATEGORIES</a>
                <div class="dropdown-menu shadow" id="categories-dropdown">
                    <a href="#" class="dropdown-item">LADIES</a>
                    <a href="#" class="dropdown-item">MENS</a>
                    <a href="#" class="dropdown-item">KIDS</a>
                    <a href="#" class="dropdown-item">FOOTWEAR</a>
                </div>
            </li>
            <li class="nav-item nav-linkedList dropdown" id="mens-dropdown-toggler">
                <a href="#" class="nav-link">MENS</a>
                <div class="dropdown-menu shadow" id="mens-dropdown">
                    <a href="#" class="dropdown-item">JEANS</a>
                    <a href="#" class="dropdown-item">T-SHIRTS</a>
                    <a href="#" class="dropdown-item">JACKETS</a>
                    <a href="#" class="dropdown-item">SHIRTS</a>
                    <a href="#" class="dropdown-item">DRESSER</a>
                    <a href="#" class="dropdown-item">COATS</a>
                    <a href="#" class="dropdown-item">FOOTWEAR</a>
                </div>
            </li>
            <li class="nav-item nav-linkedList dropdown" id="ladies-dropdown-toggler">
                <a href="#" class="nav-link">LADIES</a>
                <div class="dropdown-menu shadow" id="ladies-dropdown">
                    <a href="#" class="dropdown-item">JEANS</a>
                    <a href="#" class="dropdown-item">T-SHIRTS</a>
                    <a href="#" class="dropdown-item">JACKETS</a>
                    <a href="#" class="dropdown-item">SHIRTS</a>
                    <a href="#" class="dropdown-item">DRESSER</a>
                    <a href="#" class="dropdown-item">COATS</a>
                    <a href="#" class="dropdown-item">FOOTWEAR</a>
                </div>
            </li>
        </ul>
    </div>

    <!-- Search Box Toggler -->
    <button class="btn bg-transparent border-0 btn-outline-danger" id="search-bar-toggler"><img
            src="images/icons/search.svg" alt="search-img"></button>

    <!-- My Cart Button -->
    <a href="#" class="btn bg-transparent border-0 btn-outline-danger text-red" id="login-popup-toggler"><img
            src="images/icons/cart.svg" alt="my-cart-img"></a>

    <!-- My Account Button -->
    <a href="#" class="btn bg-transparent border-0 btn-outline-danger" id="signup-popup-toggler"><img
            src="images/icons/user.svg" alt="my-account-img"></a>
    </div>
</nav>
<!-- Navigation Bar (End) -->