<?php
/**
 * Created by PhpStorm.
 * User: Manish Bisht
 * Date: 7/30/2016
 * Time: 2:28 PM
 */
include('connection.php');
$username = $_POST['username'];
$email = $_POST['email'];
$college = $_POST['college'];
$city = $_POST['city'];
$country = $_POST['country'];
$password = $_POST['password'];
$password = password_hash($password, PASSWORD_DEFAULT);
$query = "SELECT * FROM users WHERE email='" . $email . "' OR email='".$username."'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) == 0) {
    $query = "INSERT INTO `users`(`username`, `email`, `college`, `city`, `country`, `passsword`) VALUES ('".$username."','".$email."','".$college."','".$city."','".$country."','".$password."')";
    if (mysqli_query($conn, $query)) {
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['username'] = $username;
        echo 1;
    } else {
        echo 0;
    }
} else {
    echo 0;
}