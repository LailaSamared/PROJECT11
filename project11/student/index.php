<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\css\style.css">
    <title>cover page </title>
</head>
<body>
    <div class="main">
        <div class="navbar">
            <h3>ARU STUDENTS' CLEARANCE MANAGEMENT SYSTEM</h3>
            <h5><a href="../office/adlog.php">ADMINS</a></h5>
        </div>
        <div class="menu">
                <P>Welcome to <br> <span>ARDHI <br> UNIVERSITY</span> <br> Students' Clearance <br>
                Management System </P>
        </div>
        <div class="form" >
            <form action="" method="post" >
                <h2>SIGN IN HERE</h2>
                <input type="valcha" name="registration" placeholder="Enter your registration number">
            <input type="password" name="password" placeholder="Enter your password here">
            <h4> <a href="forget.php"> <br> Forgot password?</a></h4>
            <div class="submit">
                <input type="submit" name="submit" value="LOGIN">
            </div>
            <p class="link"><span>Don't have an account?</span> <br>
            <a href="register.php"> Register </a><span> here</span></a></p>
            </form>
        </div>
    </div>
</body>
</html>

<?php

require 'connect.php';
$no=0;

if(!empty($_POST["submit"])){
    $registration= $_POST["registration"];
    $password= $_POST["password"];
}

$sql= "Select * from registration where registration='$registration' and password='$password'";
$result=mysqli_query($conn, $sql);
$num=mysqli_num_rows($result);  
if($num>0){
    session_start();
    $_SESSION['registration']=$registration;
    // header("location:studentpage.php");  
    echo "
        <script> alert('Logged in successfully');
        document.location.href = 'studentpage.php';  
        </script>
        ";      
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
