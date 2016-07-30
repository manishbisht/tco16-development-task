<?php
/**
 * Created by PhpStorm.
 * User: Manish Bisht
 * Date: 7/30/2016
 * Time: 11:43 AM
 */
session_start();
if (isset($_SESSION['email']) || isset($_SESSION['username'])) {
    header('Location:index.php');
}
?>
<html>
<head>
    <title>Login - TCO 16</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" href="images/logo.png">
</head>
<body style="background:#F7F7F9">
<div class="container" style="max-width:400px;margin-top:8%" align="center">
    <h1>Topcoder TCO 16</h1>
    <h3>Login to your Account</h3>
    <form autocomplete="off">
        <div id="error" class="alert alert-danger"></div>
        <div class="input-group input-group-lg">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
            <input id="email" type="email" class="form-control" placeholder="Email" autofocus required>
        </div>
        <br>
        <div class="input-group input-group-lg">
            <span class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
            <input id="password" type="password" class="form-control" placeholder="Password" required>
        </div>
        <br>
        <div class="btn-group" style="width:49%">
            <button id="login" type="button" class="btn btn-lg btn-primary btn-block"">Login</button>
        </div>
        <div class="btn-group" style="width:49%">
            <button type="reset" class="btn btn-lg btn-primary btn-block">Reset</button>
        </div>
    </form>
    <h5>Doesn't have account. Create <a href="register.php">here</a></h5>
    <h5><a href="forget-password.php">Forget password ?</a></h5>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/login.js"></script>
</body>
</html>
