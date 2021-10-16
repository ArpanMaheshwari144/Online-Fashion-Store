<!-- Popup Div (Start) -->
<div class="popup-div bg-light-red " id="popup-div" align="center">
    <button type="button" class="btn shadow bg-white" id="popup-close-button"><img
            src="images/icons/close.svg"></button>
    <div class="container-fluid overflow-auto d-flex justify-content-center align-items-center"
        id="popup-load-container">

        <!-- Login Form (Start) -->
        <div class="card login-signup-card shadow animated fadeInUp" id="login-card">
            <div class="card-body">
                <h3 class="text-center">Login</h3>
                <hr>
                <form class="form-group login-signup-form px-5" id="login-form" align="center" action="cart.php">
                    <label>Username</label>
                    <div class="input-group-append" align="center">
                        <input type="text" name="username" class="input-group-text mx-auto px-0 w-75"
                            placeholder="Enter Username">
                    </div>
                    <br>
                    <label>Password</label>
                    <div class="input-group-append">
                        <input type="password" name="password" class="input-group-text mx-auto px-0 w-75"
                            placeholder="Enter Password">
                    </div>
                    <br>
                    <div class="text-center">
                        <button type="submit" class="btn button px-4">Submit</button>
                    </div>
                    <hr>
                    <a href="#" class="card-link text-red font-weight-bold">Forgot Password ?</a><br>
                    <label class="mt-2">Do not have account ? <a href="#" class="card-link text-red font-weight-bold"
                            id="refer-signup">Signup</a></label>
                </form>
            </div>
        </div>
        <!-- Login Form (End) -->

        <!-- Signup Form (Start) -->
        <div class="card login-signup-card shadow animated fadeInUp" id="signup-card">
            <div class="card-body">
                <h3 class="text-center">Signup</h3>
                <hr>
                <form class="form-group login-signup-form px-5" id="signup-form" align="center" action="account.php">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label>Email</label>
                            <div class="input-group-append" align="center">
                                <input type="email" name="email" class="input-group-text mx-auto px-0 w-75"
                                    placeholder="Enter Email">
                            </div>
                            <br>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label>Phone</label>
                            <div class="input-group-append" align="center">
                                <input type="phone" name="phone" class="input-group-text mx-auto px-0 w-75"
                                    placeholder="Enter Phone">
                            </div>
                            <br>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label>Username</label>
                            <div class="input-group-append" align="center">
                                <input type="text" name="username" class="input-group-text mx-auto px-0 w-75"
                                    placeholder="Enter Username">
                            </div>
                            <br>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label>Password</label>
                            <div class="input-group-append">
                                <input type="password" name="password" class="input-group-text mx-auto px-0 w-75"
                                    placeholder="Enter Password">
                            </div>
                            <br>
                        </div>
                    </div>
                    <div class="form-check-inline my-2">
                        <input type="checkbox" name="checkbox" class="custom-checkbox mt-n2 mx-2">
                        <label>I accept the terms and conditions <a href="#"
                                class="card-link text-red font-weight-bold">View Terms and Conditions</a></label>
                    </div>
                    <div align="center">
                        <button type="submit" class="btn button px-4">Submit</button>
                    </div>
                    <hr>
                    <label class="mt-2">Already have an account ? <a href="#"
                            class="card-link text-red font-weight-bold" id="refer-login">Login</a></label>
                </form>
            </div>
        </div>
        <!-- Signup Form (End) -->

        <!-- Search Box (Start) -->
        <div class="card shadow mt-n5 animated fadeInUp" id="search-card">
            <div class="card-body pb-1" align="center">
                <form class="form-group w-auto" id="search-bar">
                    <div class="input-group-append input-group-prepend float-right">
                        <img src="images/icons/search.svg" alt="search-img" class="px-2">
                        <input type="search" name="search" class="input-group-text text-left w-100"
                            placeholder="Search Products" id="search-bar-text" autocomplete="off">
                    </div>
                    <br>
                    <button type="submit" class="btn button mr-n1 px-5 mt-3">Search</button>
                </form>
            </div>
        </div>
        <!-- Search Box (End) -->

    </div>
</div>
<!-- Popup Div (Start) -->