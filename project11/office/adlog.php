<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Page</title>
    <link rel="stylesheet" href="..\css\adlog.css">
</head>
<body>
    <div class="main">
        <div class="navbar">
            <h3>ARU STUDENT'S CLEARANCE MANAGEMENT SYSTEM</h3>
        </div>
       <h5>Welcome to <br> <span>ADMINISTRATION PANEL</span> </h5>
    </div>
    
    <div class="form">
        <form action="" method="post">
            <h2>LOGIN AS AN ADMIN</h2>
            <input type="text" name="adname" placeholder="Enter Username">
            <input type="password" name="adpass" placeholder="Enter Password">
            <div class="submit">
                <input type="submit" name="submit" value="LOGIN">
            </div>
        </form>
        </div>
    </div>
</body>
</html>

<?php

require 'connect.php';
$yes=0;
$no=0;

if(isset($_POST["submit"])){
    $adname= $_POST["adname"];
    $adpass= $_POST["adpass"];
}

$sql= "Select * from admin_credentials where adname='$adname' and adpass='$adpass'";
$result=mysqli_query($conn, $sql);
$num=mysqli_num_rows($result);
if($num>0){
    $yes=1;
    header('location:admin.php');
}else{
    $no=1;
}
?> 

<?php
if($no){
    echo"
    <script>alert('Invalid Credentials');</script>
    ";
}

?>
