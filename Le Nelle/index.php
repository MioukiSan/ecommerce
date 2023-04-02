<html>
<?php include_once "db_conn.php"; ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>visitor_page</title>
    <link rel="stylesheet" href="visitor_page.css">
    <link rel="stylesheet" href="bootstrap.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg mt-3 mx-5">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav justify-content-start flex-grow mx-5">
                    <li class="nav-item passive">
                        <a class="nav-link" href="#"><b>Home</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="AboutUs.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="product.php">Products</a>
                    </li>
                    <div class="brandName">
                        <h3><b>LE NELLE</b></h3>
                    </div>
                </ul>
                <ul class="navbar-nav justify-content-end flex-grow-1 mx-5">
                <li class="nav-item">
                    <a class="nav-link" href="loginmodal.php">Log In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sign up.php">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-6 ml-5 mt-4 col-sm-5">
                <p class="caption-top">We are here to help you make sure that your loved ones get something special and
                    aromatic
                </p>
                <p class="maincap1">LE NELLE <i>Perfume</i></p>
                <p class="lead">Le Nelle's Inspired Eau de Parfum 𝙁𝙤𝙧 𝙃𝙚𝙧 is carefully crafted for women of all
                    ages and feminine at heart.</p>
                <a class="ShopNow" href="ProductNewdesign.html" role="button">Shop Now</a>
            </div>
            <div class="col-md-4 offset-md-1 mt-4 col-sm-6">
                <div id="carouselAuto" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./La Nelle 2.jpg" class="d-block w-100" width="1000"
                                height="500" alt="\La Nelle 3.jpg">
                        </div>
                        <div class="carousel-item">
                            <img src="./La Nelle 2.jpg" class="d-block w-100" width="1000"
                                height="500" alt="/La Nelle 1.jpg">
                        </div>
                        <div class="carousel-item">
                            <img src="./La Nelle 2.jpg" class="d-block w-100" width="1000"
                                height="500" alt="C:\Users\krizi\Desktop\Leno\La Nelle 2.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="background-logo">
        <img src="./LeNelleLOGO.png" width="750" height="750" alt="">
    </div>
    <div class="bg-text">
        <img src="./LeNelleLOGO.png" width="75" height="75">
    </div>
</body>

</html>