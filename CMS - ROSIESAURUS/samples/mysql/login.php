<?php

if(isset($_POST['submit']))$username = $_POST['username'];
$password = $_POST['password'];
    
    
$connection = mysqli_connect('localhost', 'root', 'root', 'loginapp');    
    

echo $username;
echo $password;

    if($connection) {
    
    echo "We are connected";
    
    } else {
    
    die("Database connection failed");
    
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="col-sm-6">
        <forn action="login.php" method="post">
            <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
            </div>

            <label for="password">Password</label>
            <div class="form-group">
            <input type="password" name="password" class="form-control">
            </div>

            <input type="submit" class="btn btn-primary" name="submit" value="Submit">

        </form>
    </div>
</div>
</body>
</html>