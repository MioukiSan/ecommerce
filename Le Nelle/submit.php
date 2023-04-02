<?php
include_once "db_conn.php";

if(isset($_POST['username'])){
    $n_fullname=$_POST['fullname'];
    $n_username=$_POST['username'];
    $n_address = $_POST['address'];
    $n_cellnumber=$_POST['cellnumber'];
    $n_email=$_POST['email'];
    $n_password=$_POST['password'];
    
    $table = "users";
    $fields = array('username' => $n_username
                    , 'fullname' => $n_fullname
                    , 'address' => $n_address
                    , 'email' => $n_email
                    , 'cellnumber' => $n_cellnumber 
                    , 'password' => $n_password
                    );
    
    if(insert($conn, $table, $fields) ){
        header("location: index.php?new_record=added");
        exit();
    }  
    else{
        header("location: index.php?new_record=failed");
        exit();
    }
}
?>