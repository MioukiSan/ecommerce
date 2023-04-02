<html>
<?php require_once "db_conn.php";?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="NewProductPageCss.css">
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
                        <a class="nav-link" href="index.php"><b>Home</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="AboutUsPage.html">About Us</a>
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
                        <a class="nav-link" href="login.php" role="button" id="login-modal">Log in</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="SIgnUp.html">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container container-header">
        <div class="col-md-12 col-sm-4">
            <div id="carouselAuto" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#CarouselAuto" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-Label="Slide 1"></button>
                    <button type="button" data-bs-target="#CarouselAuto" data-bs-slide-to="1"
                        aria-Label="Slide 2"></button>
                    <button type="button" data-bs-target="#CarouselAuto" data-bs-slide-to="2"
                        aria-Label="Slide 3"></button>
                </div>
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
    <div class="dropdown">
        <button class="btn btn-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">His Collection Corner</a></li>
            <li><a class="dropdown-item" href="#">His Collection Corner</a></li>
            <li><a class="dropdown-item" href="#">Best Seller</a></li>
        </ul>
    </div>
    <div class="background-logo">
        <img src="./LeNelleLOGO.png" width="750" height="750" alt="">
    </div>
    <div class="bg-text">
        <img src="./LeNelleLOGO.png" width="75" height="75">
    </div>
    <div class="container">
    <?php  
        $itemlist = query($conn, "SELECT products.item_id, products.item_name, products.item_img, products.item_price, products.item_rating, products.item_description, products.category_id, orders.item_qty FROM products LEFT JOIN orders ON products.item_id=orders.item_id");
        foreach($itemlist as $row){
    ?>
    <button class="product-card mx-auto" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $row['item_id']; ?>">
        <div class="product-image">
            <img src="<?php echo $row['item_img']; ?>" class="d-block w-100" alt="Product Image">
        </div>
        <div class="product-details">
            <h3 class="product-title"><?php echo $row['item_name']; ?></h3>
            <div class="rating">
                <?php for($i = 0; $i < $row['item_rating']; $i++) { ?>
                    <span class="star">&#9733;</span>
                <?php } ?>
                <span class="rating-count">(<?php echo $row['item_rating']; ?>.0)</span>
            </div>
        </div>
        <div class="price"><?php echo $row['item_price']; ?></div>
    </button>
    <div class="modal fade" id="exampleModal<?php echo $row['item_id']; ?>" tabindex="-1" aria-Labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 py-2">
                                        <img src="<?php echo $row['item_img']; ?>" class="d-block w-100">
                                    </div>
                                    <div class="col-md-6">
                                        <h3 class="product-title"><?php echo $row['item_name']; ?></h3>
                                        <div class="rating">
                                        <?php for($i = 0; $i < $row['item_rating']; $i++) { ?>
                                        <span class="star">&#9733;</span>
                                        <?php } ?>
                                        </div>
                                        <p class="Label"><?php echo $row['category_id']; ?></p>
                                        <div class="price1"><?php echo "Php ". number_format($row['item_price'],2); ?></div>
                                        <p>Product Descriptions</p>
                                        <div class="description">
                                            <a><?php echo $row['item_description']; ?></a>
                                        </div>
                                        <form method="GET" action="checkout.php">
                                            <div class="mb-3 quantity">    
                                            <input type="hidden" class="form-control" id="item_id" name="item_id" value="<?php echo $row['item_id'];?>"  >
                                                <label for="item_qty" class="form-label">Quantity:</label>
                                                <input type="number" class="form-control" id="item_qty" name="item_qty"  min="1" max="10" value="1">
                                                <button type="submit" class="btn float-end">Buy Now</button>
                                            </div>
                                        </form>
                                        <div class="button">
                                        <!-- <a class="btn float-end" name="buy_now" href="checkout.php?item_">Buy now</a> -->
                                        <form action="cart.php" method="post">
                                            <button type="submit" class="btn float-end"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                                    <path
                                                        d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                                </svg></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <?php 
        }
    ?>
</body>
</html>       