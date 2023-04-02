<?php 
require_once "db_conn.php";
if (isset($_SESSION['user_id'])) {

    // Fetch user details from database
    $user_id = $_SESSION['user_id'];
    $query = "SELECT * FROM users WHERE user_id = $user_id";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);    
        $fullname = $row['fullname']; 
        $address = $row['address'];   
        $cellnumber = $row['cellnumber'];
    } else {   
        echo "User not found.";  
    }
}

if (isset($_POST['buy_now'])) {
    $item_qty = $_POST['item_qty'];
    $item_id = $_POST['item_id'];
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="NewProductPageCss.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="checkout.css">
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
    <div class="bg-text">
        <img src="./LeNelleLOGO.png" width="75" height="75">
    </div>
    <h1 class="checkout">Checkout</h1>
    <div class="wrapper">
        <div class="row">
            <form method="POST">
                <div class="col-lg-6 shipping">
                    <?php  
                    $deliverydetails = mysqli_query($conn, "SELECT * FROM users");
                    if (mysqli_num_rows($deliverydetails) > 0) {
                        $row = mysqli_fetch_assoc($deliverydetails);
                    ?>
                    <h3 class="ship"><span>Shiiping Details</span></h3>
                        <div class="fullname">
                            <label for="fullname">Full Name</label>
                            <input type="text" name="fullname" id="fullname" placeholder="<?php echo $row['fullname']; ?>" required>
                        </div>
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address" placeholder="<?php echo $row['address']; ?>" required>
                        <div class="width50">
                            <label for="email">Email Address</label>
                            <input type="text" name="email" id="email" placeholder="<?php echo $row['email']; ?>" required>
                        </div>
                        <div class="width50">
                            <label for="cellnumber">Cellphone Number</label>
                            <input type="text" name="cellnumber" id="cellnumber" placeholder="<?php echo $row['cellnumber']; ?>" required>
                        </div>
                        <input type="submit" name="submit" value="Change Details" class="redbutton">
                    </div>
                    <?php 
                    } else {
                        echo "Delivery details not found. Fill out first.";
                    }
                ?>             
            </div>
            <div class="col-lg-4 order">
            <?php  
            if(isset($_GET['item_id']) && isset($_GET['item_qty'])){
                $item_id = $_GET['item_id'];
                $item_qty = $_GET['item_qty'];
                $itemlist = query($conn, "SELECT * FROM products where item_id = '$item_id'");
            }
                    
                    foreach($itemlist as $row){
                        ?>
                    <h3 class="topborder"><span>Your Order</span></h3>
                    <div class="product-image">
                        <img src="<?php echo $row['item_img']; ?>" class="d-block w-auto h-auto">
                        <h3 class="product-title"><?php echo $row['item_name']; ?></h3>
                        <p><?php echo $row['item_price']; ?> x <?php echo $item_qty . "pcs"; ?></p>
                        <div class="qty inline"><span class="smalltxt">x</span><?php echo $item_qty?></div>
                    </div>
                    <input type="submit" name="submit" value="Place Order" class="redbutton">
                </div>
            </form>
            <?php 

                }
                ?> 
    </div>  
</body>
</html>
