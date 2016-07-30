<?php
/**
 * Created by PhpStorm.
 * User: Manish Bisht
 * Date: 7/30/2016
 * Time: 5:02 PM
 */
include('connection.php');
$email = $_POST['email'];
$password = $_POST['password'];
$query = "SELECT * FROM users WHERE email='" . $email . "'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) != 0) {
    $result = mysqli_fetch_array($result);
    session_start();
    if (password_verify($password, $result['passsword'])) {
        $_SESSION['email'] = $email;
        $_SESSION['username'] = $result['username'];
        echo 1;
    } else {
        echo 0;
    }
} else {
    echo 0;
}