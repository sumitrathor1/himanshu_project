<head>
    <link rel="stylesheet" href="./assets/css/header.css">
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Exclusive</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">SignUp</a>
                </li>
            </ul>
            <form class="d-flex ms-lg-3 my-3 my-lg-0">
                <div class="search-container">
                    <input type="text" class="form-control search-input" placeholder="What are you looking for?">
                    <span class="search-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                            stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="11" cy="11" r="8" />
                            <line x1="21" y1="21" x2="16.65" y2="16.65" />
                        </svg> </span>
                </div>
            </form>
            <div class="d-flex align-items-center ms-3">
                <a href="#" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path
                            d="M20.8 4.6a5.4 5.4 0 0 0-7.6 0L12 5.8l-1.2-1.2a5.4 5.4 0 1 0-7.6 7.6l8.8 8.8 8.8-8.8a5.4 5.4 0 0 0 0-7.6z" />
                    </svg> </a>
                <a href="#" class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart"
                    aria-controls="offcanvasCart"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                        fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <circle cx="9" cy="21" r="1" />
                        <circle cx="20" cy="21" r="1" />
                        <path d="M1 1h4l2 13h13l2-9H6" />
                    </svg> </a>


                <?php
if (isset($_SESSION['user_id'])) { 
    $user_id = $_SESSION['user_id'];
                echo '<a href="#offcanvasUserProfile" class="nav-link" data-bs-toggle="offcanvas" role="button"
                    aria-controls="offcanvasUserProfile">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                        stroke-width="2" viewBox="0 0 24 24">
                        <circle cx="12" cy="8" r="4" />
                        <path d="M12 14c-4 0-8 2-8 4v2h16v-2c0-2-4-4-8-4z" />
                    </svg>
                </a>';

//                 if ($user_type === 'admin') {
//                 echo '<a class="nav-link" href="admin-dashboard.php">Admin Panel</a>';
//                 }
} 
else {
    echo '<a class="nav-link" href="login.php">Login</a>';
}
?>
            </div>
        </div>
    </div>
</nav>


<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasCart">
    <div class="offcanvas-header justify-content-center">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="order-md-last">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-primary">Your cart</span>
                <span class="badge bg-primary rounded-pill">3</span>
            </h4>
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                        <h6 class="my-0">Growers cider</h6>
                        <small class="text-body-secondary">Brief description</small>
                    </div>
                    <span class="text-body-secondary">$12</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                        <h6 class="my-0">Fresh grapes</h6>
                        <small class="text-body-secondary">Brief description</small>
                    </div>
                    <span class="text-body-secondary">$8</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                        <h6 class="my-0">Heinz tomato ketchup</h6>
                        <small class="text-body-secondary">Brief description</small>
                    </div>
                    <span class="text-body-secondary">$5</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (USD)</span>
                    <strong>$20</strong>
                </li>
            </ul>

            <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
        </div>
    </div>
</div>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar">

    <div class="offcanvas-header justify-content-between">
        <h4 class="fw-normal text-uppercase fs-6">Menu</h4>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body">

        <ul class="navbar-nav justify-content-end menu-list list-unstyled d-flex gap-md-3 mb-0">
            <li class="nav-item border-dashed active">
                <a href="index.html" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
                    <svg width="24" height="24" viewBox="0 0 24 24">
                        <use xlink:href="#fruits"></use>
                    </svg>
                    <span>Fruits and vegetables</span>
                </a>
            </li>
            <li class="nav-item border-dashed">
                <a href="index.html" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
                    <svg width="24" height="24" viewBox="0 0 24 24">
                        <use xlink:href="#dairy"></use>
                    </svg>
                    <span>Dairy and Eggs</span>
                </a>
            </li>
            <li class="nav-item border-dashed">
                <a href="index.html" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
                    <svg width="24" height="24" viewBox="0 0 24 24">
                        <use xlink:href="#meat"></use>
                    </svg>
                    <span>Meat and Poultry</span>
                </a>
            </li>
            <li class="nav-item border-dashed">
                <a href="index.html" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
                    <svg width="24" height="24" viewBox="0 0 24 24">
                        <use xlink:href="#seafood"></use>
                    </svg>
                    <span>Seafood</span>
                </a>
            </li>
            <li class="nav-item border-dashed">
                <a href="index.html" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
                    <svg width="24" height="24" viewBox="0 0 24 24">
                        <use xlink:href="#bakery"></use>
                    </svg>
                    <span>Bakery and Bread</span>
                </a>
            </li>
            <li class="nav-item border-dashed">
                <a href="index.html" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
                    <svg width="24" height="24" viewBox="0 0 24 24">
                        <use xlink:href="#canned"></use>
                    </svg>
                    <span>Canned Goods</span>
                </a>
            </li>
            <li class="nav-item border-dashed">
                <a href="index.html" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
                    <svg width="24" height="24" viewBox="0 0 24 24">
                        <use xlink:href="#frozen"></use>
                    </svg>
                    <span>Frozen Foods</span>
                </a>
            </li>
            <li class="nav-item border-dashed">
                <a href="index.html" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
                    <svg width="24" height="24" viewBox="0 0 24 24">
                        <use xlink:href="#pasta"></use>
                    </svg>
                    <span>Pasta and Rice</span>
                </a>
            </li>
            <li class="nav-item border-dashed">
                <a href="index.html" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
                    <svg width="24" height="24" viewBox="0 0 24 24">
                        <use xlink:href="#breakfast"></use>
                    </svg>
                    <span>Breakfast Foods</span>
                </a>
            </li>
            <li class="nav-item border-dashed">
                <a href="index.html" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
                    <svg width="24" height="24" viewBox="0 0 24 24">
                        <use xlink:href="#snacks"></use>
                    </svg>
                    <span>Snacks and Chips</span>
                </a>
            </li>
            <li class="nav-item border-dashed">
                <button
                    class="btn btn-toggle dropdown-toggle position-relative w-100 d-flex justify-content-between align-items-center text-dark p-2"
                    data-bs-toggle="collapse" data-bs-target="#beverages-collapse" aria-expanded="false">
                    <div class="d-flex gap-3">
                        <svg width="24" height="24" viewBox="0 0 24 24">
                            <use xlink:href="#beverages"></use>
                        </svg>
                        <span>Beverages</span>
                    </div>
                </button>
                <div class="collapse" id="beverages-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal ps-5 pb-1">
                        <li class="border-bottom py-2"><a href="index.html" class="dropdown-item">Water</a></li>
                        <li class="border-bottom py-2"><a href="index.html" class="dropdown-item">Juice</a></li>
                        <li class="border-bottom py-2"><a href="index.html" class="dropdown-item">Soda</a></li>
                        <li class="border-bottom py-2"><a href="index.html" class="dropdown-item">Tea</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item border-dashed">
                <a href="index.html" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
                    <svg width="24" height="24" viewBox="0 0 24 24">
                        <use xlink:href="#spices"></use>
                    </svg>
                    <span>Spices and Seasonings</span>
                </a>
            </li>
            <li class="nav-item border-dashed">
                <a href="index.html" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
                    <svg width="24" height="24" viewBox="0 0 24 24">
                        <use xlink:href="#baby"></use>
                    </svg>
                    <span>Baby Food and Formula</span>
                </a>
            </li>
            <li class="nav-item border-dashed">
                <a href="index.html" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
                    <svg width="24" height="24" viewBox="0 0 24 24">
                        <use xlink:href="#health"></use>
                    </svg>
                    <span>Health and Wellness</span>
                </a>
            </li>
            <li class="nav-item border-dashed">
                <a href="index.html" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
                    <svg width="24" height="24" viewBox="0 0 24 24">
                        <use xlink:href="#household"></use>
                    </svg>
                    <span>Household Supplies</span>
                </a>
            </li>
            <li class="nav-item border-dashed">
                <a href="index.html" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
                    <svg width="24" height="24" viewBox="0 0 24 24">
                        <use xlink:href="#personal"></use>
                    </svg>
                    <span>Personal Care</span>
                </a>
            </li>
            <li class="nav-item border-dashed">
                <a href="index.html" class="nav-link d-flex align-items-center gap-3 text-dark p-2">
                    <svg width="24" height="24" viewBox="0 0 24 24">
                        <use xlink:href="#pet"></use>
                    </svg>
                    <span>Pet Food and Supplies</span>
                </a>
            </li>
        </ul>

    </div>

</div>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasUserProfile"
    aria-labelledby="offcanvasUserProfileLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasUserProfileLabel"><?php echo $_SESSION['user_name'] ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body">
        <a class="dropdown-item mb-2" href="#">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile
        </a>
        <a class="dropdown-item mb-2" href="#">
            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i> Settings
        </a>
        <a class="dropdown-item mb-2" href="#">
            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i> Activity Log
        </a>
        <hr>
        <a class="dropdown-item text-danger" href="logout.php">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
        </a>
    </div>
</div>