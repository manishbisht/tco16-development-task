<?php
/**
 * Created by PhpStorm.
 * User: Manish Bisht
 * Date: 7/30/2016
 * Time: 11:45 AM
 */
session_start();
if (isset($_SESSION['email']) || isset($_SESSION['username'])) {
    header('Location:index.php');
}
?>
<html>
<head>
    <title>Register - TCO 16</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" href="images/logo.png">
</head>
<body style="background:#F7F7F9">
<div class="container" style="max-width:400px;margin-top:0%" align="center">
    <h1>Topcoder TCO 16</h1>
    <h3>Create your Account</h3>
    <h5>Already have a Account Login <a href="login.php">here</a></h5>
    <form autocomplete="off">
        <div id="error" class="alert alert-danger"></div>
        <div class="input-group input-group-lg">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
            <input id="username" type="text" class="form-control" placeholder="Username" required autofocus>
        </div>
        <br>
        <div class="input-group input-group-lg">
            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></span>
            <input id="email" type="email" class="form-control" placeholder="Email" required>
        </div>
        <br>
        <div class="input-group input-group-lg">
            <span class="input-group-addon"><span class="glyphicon glyphicon-education" aria-hidden="true"></span></span>
            <input id="college" type="text" class="form-control" placeholder="College Name" required>
        </div>
        <br>
        <div class="input-group input-group-lg">
            <span class="input-group-addon"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></span>
            <input id="city" type="text" class="form-control" placeholder="City Name" required>
        </div>
        <br>
        <div class="input-group input-group-lg">
            <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></span>
            <input id="country" type="text" class="form-control" placeholder="Country Name" required>
        </div>
        <br>
        <div class="input-group input-group-lg">
            <span class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
            <input id="password" type="password" class="form-control" placeholder="Password" required>
        </div>
        <br>
        <div class="input-group input-group-lg">
            <span class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
            <input id="cpassword" type="password" class="form-control" placeholder="Confirm Password" required>
        </div>
        <br>
        <div class="btn-group" style="width:49%">
            <button id="register" type="button" class="btn btn-lg btn-primary btn-block"">Register</button>
        </div>
        <div class="btn-group" style="width:49%">
            <button type="reset" class="btn btn-lg btn-primary btn-block">Reset</button>
        </div>
    </form>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/register.js"></script>
</body>
</html>