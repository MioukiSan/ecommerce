<html>
<?php include_once "db_conn.php"; ?>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">    
        <link rel="stylesheet" href="css-signup.css">    

    <style type="text/css">
        
        </style>

</head>
<body>
<div class="context">
    </div>
    <div class="area" >
            <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
    </div >
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h2>Sign Up</h2>
                <?php
                     if(isset($_GET['new_record'])){
                            switch($_GET['new_record']){
                                case "added": echo "<div class='alert alert-success'>User Added.</div>";
                                      break;
                                case "failed":  echo "<div class='alert alert-danger'>User Not Added</div>";
                                      break;
                                        
                            }
                       }
                ?>
                <form action="submit.php" method="post">
                <div class="row my-3">
                            <div class="col-md-12">
                                <div class="group">
                                    <input type="text" class="form-control" name="fullname" required>
                                    <label>Full Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="group">
                                    <input type="text" class="form-control" name="username" required>
                                    <label>Username</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="group">
                                    <input type="text" class="form-control" name="cellnumber" required>
                                    <label>Contact Number</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="group">
                                    <input type="text" class="form-control" name="address" required>
                                    <label>Address</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="group">
                                    <input type="email" class="form-control" name="email" required>
                                    <label>Email</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="group">
                                    <input type="password" class="form-control" name="password" required>
                                    <label>Password</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="group">
                                    <input type="password" class="form-control" name="confirmPassword" required>
                                <label>Confirm Password</label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class=btn>Log In</button>
                            <div class="login">
                                <p>Already Member?
                                    <a href="loginmodal.php" class="register-page">Log In</a>
                                </p>
                                </div>
                        </div>
                    </div>
                </form>
            </div>
</body>
<script src="js/bootstrap.js">
    <script src="bootstrap/js/bootstrap.js"></script>
    <script>
        // Get the password and confirm password fields
        var passwordField = document.getElementsByName("password")[0];
        var confirmPasswordField = document.getElementsByName("confirmPassword")[0];
      
        // Add an event listener to the form submission
        document.getElementsByTagName("form")[0].addEventListener("submit", function(event) {
          // Check if the password and confirm password fields have the same value
          if (passwordField.value !== confirmPasswordField.value) {
            // If they don't match, prevent the form from submitting and show an error message
            event.preventDefault();
            alert("Passwords do not match. \nPlease make sure the passwords you entered match.");
          }
        });
      </script> 
      
</html>
