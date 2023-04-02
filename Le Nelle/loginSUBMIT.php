<?php
// include_once 'db_conn.php';

// session_start();

// $username = mysqli_real_escape_string($conn, $_POST['username']);
// $password = mysqli_real_escape_string($conn, $_POST['password']);

// if (empty($username) || empty($password)) {
//     $_SESSION['login_error'] = 'Username and password are required';
//     header('Location: ./loginpage.php');
//     exit();
// }

// $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
// $result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result)) {
//     $row = mysqli_fetch_assoc($result);
//     $_SESSION['user_id'] = $row['user_id'];
//     if ($row['user_type'] == 'admin') {
//         header('Location: ./admin_dashboard.php');
//     } else {
//         header('Location: ./user_dashboard.php');
//     }
//     exit();
// } else {
//     $_SESSION['login_error'] = 'Invalid username or password';
//     header('Location: ./loginmodal.php?error=login');
//     exit();
// }
?>

<?php
include_once 'db_conn.php';


$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);


$sql = "SELECT * FROM users WHERE `username` = '$username' AND `password` = '$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['user_id'] = $row['user_id'];
    if ($row['usertype'] == 'admin') {
        header('Location:./admin_index.php');
    } else {
        header('Location:./loginpage.php');
    }
    exit();
} else {
    $_SESSION['login_error'] = 'Invalid username or password';
    header('Location:./loginmodal.php?error=login');
    exit();
}
?>

