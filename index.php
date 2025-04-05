<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title></title>
</head>

<style>
.red-box {
    width: 12px;
    height: 28px;
    background-color: red;
    border-radius: 4px;
}
</style>

<body>
    <?php include "./assets/pages/header.php" ?>
    <!-- Hero Section -->
    <section class="hero">
        <img src="assets/images/farmer.png" class="img-fluid w-100" alt="Hero Image">
    </section>

    <!-- Browse by Category -->
    <section class="container mt-5 gap-4">
        <div class="d-flex w-100">
            <div class="red-box"></div>
            <span class="ms-2">Category</span>
        </div>
        <div class="w-100">
            <h3>Browse By Category</h3>
        </div>

        <div id="categoryCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner text-center">
                <div class="carousel-item active">
                    <img src="assets/images/cat1.png" class="img-fluid" alt="Category 1">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/cat2.png" class="img-fluid" alt="Category 2">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/cat3.png" class="img-fluid" alt="Category 3">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/cat4.png" class="img-fluid" alt="Category 4">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#categoryCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#categoryCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>

    </section>

    <!-- Best Selling Products -->

    <!-- Browse by Category with Slider -->
    <section class="container mt-5">
        <div class="d-flex w-100">
            <div class="red-box"></div>
            <span class="ms-2">This Month</span>
        </div>
        <div class="w-100">
            <h3>Best Selling Products</h3>
        </div>
        <div class="row">
            <div class="col-md-3"><img src="assets/images/prod1.png" class="img-fluid"></div>
            <div class="col-md-3"><img src="assets/images/prod2.png" class="img-fluid"></div>
            <div class="col-md-3"><img src="assets/images/prod3.png" class="img-fluid"></div>
            <div class="col-md-3"><img src="assets/images/prod4.png" class="img-fluid"></div>
        </div>
    </section>

    <!-- Featured Product Banner -->
    <section class="container-fluid mt-5 text-center bg-dark text-white p-5">
        <h2>Enhance Your Music Experience</h2>
        <button class="btn btn-success">Buy Now</button>
    </section>

    <!-- Explore Our Products -->
    <section class="container mt-5">
        <h3>Explore Our Products</h3>
        <div class="row">
            <div class="col-md-3"><img src="assets/images/prod1.png" class="img-fluid"></div>
            <div class="col-md-3"><img src="assets/images/prod1.png" class="img-fluid"></div>
            <div class="col-md-3"><img src="assets/images/prod1.png" class="img-fluid"></div>
            <div class="col-md-3"><img src="assets/images/prod1.png" class="img-fluid"></div>
        </div>
    </section>

    <!-- Promotional Section -->
    <section class="container mt-5">
        <div class="row">
            <div class="col-md-6 bg-secondary text-white p-5 text-center">PlayStation 5</div>
            <div class="col-md-3 bg-dark text-white p-5 text-center">Speakers</div>
            <div class="col-md-3 bg-dark text-white p-5 text-center">Perfume</div>
        </div>
    </section>
</body>

</html>

<?php include "./assets/pages/footer.php" ?>
</body>

</html>