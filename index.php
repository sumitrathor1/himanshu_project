<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title></title>
</head>

<body>
    <?php include "./assets/pages/header.php" ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>E-Commerce Homepage</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <body>
        <!-- Hero Section -->
        <section class="container-fluid p-0">
            <img src="assets/images/hero.jpg" class="img-fluid w-100" alt="Hero Image">
        </section>

        <!-- Category Section -->
        <section class="container my-5">
            <h3 class="text-center">Browse By Category</h3>
            <div class="row text-center mt-4">
                <div class="col-md-3">
                    <img src="assets/images/category1.jpg" class="img-fluid" alt="Category 1">
                </div>
                <div class="col-md-3">
                    <img src="assets/images/category2.jpg" class="img-fluid" alt="Category 2">
                </div>
                <div class="col-md-3">
                    <img src="assets/images/category3.jpg" class="img-fluid" alt="Category 3">
                </div>
                <div class="col-md-3">
                    <img src="assets/images/category4.jpg" class="img-fluid" alt="Category 4">
                </div>
            </div>
        </section>

        <!-- Best Selling Products -->
        <section class="container my-5">
            <h3 class="text-start">Best Selling Products</h3>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img src="assets/images/product1.jpg" class="card-img-top" alt="Product 1">
                        <div class="card-body">
                            <h5 class="card-title">The North Coat</h5>
                            <p class="text-danger">$250.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="assets/images/product2.jpg" class="card-img-top" alt="Product 2">
                        <div class="card-body">
                            <h5 class="card-title">Gucci Leather Bag</h5>
                            <p class="text-danger">$960.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="assets/images/product3.jpg" class="card-img-top" alt="Product 3">
                        <div class="card-body">
                            <h5 class="card-title">PC Liquid Cooler</h5>
                            <p class="text-danger">$120.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="assets/images/product4.jpg" class="card-img-top" alt="Product 4">
                        <div class="card-body">
                            <h5 class="card-title">Small Bookshelf</h5>
                            <p class="text-danger">$75.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Explore Products -->
        <section class="container my-5">
            <h3 class="text-start">Explore Our Products</h3>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img src="assets/images/product5.jpg" class="card-img-top" alt="Product 5">
                        <div class="card-body">
                            <h5 class="card-title">Camera</h5>
                            <p class="text-danger">$500.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="assets/images/product6.jpg" class="card-img-top" alt="Product 6">
                        <div class="card-body">
                            <h5 class="card-title">Gaming Laptop</h5>
                            <p class="text-danger">$1200.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="assets/images/product7.jpg" class="card-img-top" alt="Product 7">
                        <div class="card-body">
                            <h5 class="card-title">Football Shoes</h5>
                            <p class="text-danger">$85.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="assets/images/product8.jpg" class="card-img-top" alt="Product 8">
                        <div class="card-body">
                            <h5 class="card-title">Gaming Controller</h5>
                            <p class="text-danger">$60.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Section -->
        <section class="container my-5">
            <h3 class="text-start">New Arrival</h3>
            <div class="row">
                <div class="col-md-6">
                    <img src="assets/images/ps5.jpg" class="img-fluid" alt="PS5">
                    <h4>PlayStation 5</h4>
                    <p>Experience next-gen gaming.</p>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="assets/images/speaker.jpg" class="img-fluid" alt="Speakers">
                            <p>Speakers</p>
                        </div>
                        <div class="col-md-6">
                            <img src="assets/images/perfume.jpg" class="img-fluid" alt="Perfume">
                            <p>Perfume</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>

    </html>

    <?php include "./assets/pages/footer.php" ?>
</body>

</html>