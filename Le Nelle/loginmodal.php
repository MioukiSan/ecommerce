<html>
<?php include_once "db_conn.php"; ?>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">    
    <link rel="stylesheet" href="wrapperLogin.css">    

    <style type="text/css">
       

    </style>

</head>
<body>
<div class="row justify-content-center">
    <div class="col-md-4 my-5">
    <div class="wrapper">
        <span class="icon-close"><ion-icon name="close-outline"></ion-icon>
        </span>
        <div class="form-box login">
        <h2>Login</h2>
        <form action="loginSUBMIT.php" method="POST">
            <div class="input-box">
                <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                <input type="username" name="username"required>
                <label>Username</label>
            </div>
            <div class="input-box mt-3">
                <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                <input type="password" name="password" required>
                <label>Password</label>
            </div>
            <div class="remember-forgot" required>
                <label><input type="checkbox">
                Remember me</label>
                <a href="">Forgot Password?</a>
            </div>
            <button type="submit" class='btn'>Log In</button>
            <div class="register">
                <p>Don't have account?
                    <a href="sign up.php" class="register-page">Sign Up</a>
                </p>
            </div>
        </form>
    </div>
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>