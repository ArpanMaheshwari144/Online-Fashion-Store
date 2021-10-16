<!-- Sidebar (Start) -->
<section class="shadow" id="sidebar">
    <div class="card-body">
        <ul class="sidebar-list list-unstyled">
            <br>
            <br>
            <br>
            <hr>
            <li class="d-block mx-1"><a href="#" class="card-link text-red">HOME</a></li>
            <hr>
            <li class="d-block mx-1 dropdown" id="categories-toggler-sidebar">
                <a href="#" class="card-link text-red">CATEGORIES</a>
                <div class="sidebar-dropdown-menu" id="categories-sidebar">
                    <a href="#" class="d-block mx-3 card-link text-red">LADIES</a>
                    <a href="#" class="d-block mx-3 card-link text-red">MENS</a>
                    <a href="#" class="d-block mx-3 card-link text-red">KIDS</a>
                    <a href="#" class="d-block mx-3 card-link text-red">FOOTWEAR</a>
                </div>
            </li>
            <hr>
            <li class="d-block mx-1 dropdown" id="mens-toggler-sidebar">
                <a href="#" class="card-link text-red">MENS</a>
                <div class="sidebar-dropdown-menu" id="mens-sidebar">
                    <a href="#" class="d-block mx-3 card-link text-red">JEANS</a>
                    <a href="#" class="d-block mx-3 card-link text-red">T-SHIRTS</a>
                    <a href="#" class="d-block mx-3 card-link text-red">SHIRTS</a>
                    <a href="#" class="d-block mx-3 card-link text-red">DRESSER</a>
                    <a href="#" class="d-block mx-3 card-link text-red">COATS</a>
                    <a href="#" class="d-block mx-3 card-link text-red">FOOTWEAR</a>
                </div>
            </li>
            <hr>
            <li class="d-block mx-1 dropdown" id="ladies-toggler-sidebar">
                <a href="#" class="card-link text-red">LADIES</a>
                <div class="sidebar-dropdown-menu" id="ladies-sidebar">
                    <a href="#" class="d-block mx-3 card-link text-red">JEANS</a>
                    <a href="#" class="d-block mx-3 card-link text-red">T-SHIRTS</a>
                    <a href="#" class="d-block mx-3 card-link text-red">SHIRTS</a>
                    <a href="#" class="d-block mx-3 card-link text-red">DRESSER</a>
                    <a href="#" class="d-block mx-3 card-link text-red">COATS</a>
                    <a href="#" class="d-block mx-3 card-link text-red">FOOTWEAR</a>
                </div>
            </li>
            <hr>
            <li class="d-block mx-1"><a href="#" class="card-link text-red">MY ACCOUNT</a></li>
            <hr>
            <li class="d-block mx-1"><a href="#" class="card-link text-red">MY CART</a></li>
            <hr>
            <li class="d-block mx-1"><a href="#" class="card-link text-red">LOGOUT</a></li>
            <hr>
        </ul>
    </div>
</section>
<script>
$(document).ready(function() {

    // Categories Dropdown
    $('#categories-toggler-sidebar').mouseenter(function() {
        $('#categories-sidebar').show(150);
    });
    $('#categories-toggler-sidebar').mouseleave(function() {
        $('#categories-sidebar').hide(150);
    });

    // Mens Dropdown
    $('#mens-toggler-sidebar').mouseenter(function() {
        $('#mens-sidebar').show(150);
    });
    $('#mens-toggler-sidebar').mouseleave(function() {
        $('#mens-sidebar').hide(150);
    });

    // Ladies Dropdown
    $('#ladies-toggler-sidebar').mouseenter(function() {
        $('#ladies-sidebar').show(150);
    });
    $('#ladies-toggler-sidebar').mouseleave(function() {
        $('#ladies-sidebar').hide(150);
    });

});
</script>
<!-- Sidebar (End) -->