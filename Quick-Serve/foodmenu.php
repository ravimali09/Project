<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Food Menu</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Responsive Styling -->
    <style>
        .food-menu {
            padding: 20px 0;
        }

        .food-menu .row {
            margin-bottom: 15px;
            align-items: center;
        }

        .food-menu img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 5px;
            overflow: hidden;
            image-rendering: optimizeQuality;
        }

        .food-menu h5 {
            font-size: 1.25rem;
            font-weight: 600;
        }

        .food-menu .description {
            font-size: 0.9rem;
            color: #666;
        }

        .food-menu .price {
            font-size: 1rem;
            font-weight: bold;
            margin-top: 10px;
        }

        .food-menu .btn {
            width: 100%;
            margin-top: 10px;
        }

        @media (max-width: 768px) {
            .food-menu .row {
                display: flex;
                flex-wrap: wrap;
                align-items: flex-start;
                justify-content: space-between;
            }

            .food-menu .col-md-3, .food-menu .col-md-4 {
                flex: 0 0 100%;
                max-width: 100%;
                text-align: center;
            }

            .food-menu img {
                margin-bottom: 15px;
            }

            .food-menu .col-md-4 {
                margin-bottom: 15px;
            }

            .food-menu .col-md-3.border-left {
                border: none;
            }
        }
    </style>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <?php include_once('header.php'); ?>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Select Food</h1>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Food Menu -->
        <div class="food-menu">
            <div class="container">
                <div class="d-flex justify-content-center row">
                    <div class="col-md-10">
                        <?php foreach ($food_arr as $data) { ?>
                            <div class="row p-2 bg-white border rounded">
                                <div class="col-md-3 mt-1">
                                    <img src="../admin_panel/admin_panel/assets/img/food/<?php echo $data->image; ?>" alt="Food Image">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <h5><?php echo $data->name; ?></h5>
                                    <div class="description">
                                        <span>Description: </span><span><?php echo $data->description; ?></span>
                                    </div>
                                    <div class="price">Rs. <?php echo $data->price; ?></div>
                                </div>
                                <div class="col-md-3 d-flex flex-column align-items-center justify-content-center">
                                    <button class="btn btn-outline-primary btn-sm" type="button">
                                        <a href="add_cart" style="color:black; text-decoration: none;">Add to Cart</a>
                                    </button>
                                    <button class="btn btn-outline-primary btn-sm" type="button">
                                        <a href="view_cart" style="color:black; text-decoration: none;">View Cart</a>
                                    </button>
                                </div>
                            </div>
                            <br>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Food Menu End -->

        <!-- Footer Start -->
        <?php include_once('footer.php'); ?>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
