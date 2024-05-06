<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register page</title>
    <link rel="stylesheet" href="..\css\reg.css">
</head>
<body>
    <div class="main">
        <div class="navbar">
            <h3>ARU STUDENTS' CLEARANCE MANAGEMENT SYSTEM</h3>
        </div>
        <div class="container">
            <h5 class="formtitle">REGISTRATION FORM</h5>
            <form action="" method="post">
                <div class="maininfo">
                    <div class="userinput">
                        <label for="fullname">Full name</label>
                        <input type="text"
                                id="fullname"
                                name="fullname"
                                placeholder="Enter Full name"/>
                    </div>
                    <div class="userinput">
                        <label for="Registration">Registration Number</label>
                        <input type="varchar"
                                id="Registration"
                                name="registration"
                                placeholder="Enter Registration Number"/>
                    </div>
                    <div class="userinput">
                        <label for="email">Email</label>
                        <input type="email"
                                id="email"
                                name="email"
                                placeholder="Enter your email"/>
                    </div>
                    <div class="userinput">
                        <label for="phonenumber">Phonenumber</label>
                        <input type="varchar"
                                id="phonenumber"
                                name="phonenumber"
                                placeholder="Enter your Phone Number"/>
                    </div>
                    <div class="userinput">
                        <label for="password">Password</label>
                        <input type="password"
                                id="password"
                                name="password"
                                placeholder="Create Your Password"/>
                    </div>
                    <div class="userinput">
                        <label for="confirmpassword">Confirm Password</label>
                        <input type="password"
                                id="confirmpassword"
                                name="confirmpassword"
                                placeholder="Confirm Your Password"/>
                    </div>
                </div>
                <div class="gender">
                    <span class="title"> GENDER </span>
                    <div class="category">
                        <input type="radio" name="gender" id="male">
                        <label for="male">Male</label>
                        <input type="radio" name="gender" id="female">
                        <label for="female">Female</label>
                    </div>
                </div>
                <div class="submit">
                    <input type="submit" name="submit" value="SUBMIT">
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
$match=0;

if(!empty($_POST["submit"])){
    $fullname= $_POST["fullname"];
    $registration= $_POST["registration"];
    $email= $_POST["email"];
    $phonenumber= $_POST["phonenumber"];
    $password= $_POST["password"];
    $encpassword=md5($password);
    $encconfirmpassword=md5($confirmpassword);
    $confirmpassword= $_POST["confirmpassword"];
    $gender= $_POST["gender"];
}

$sql= "Select * from registration where registration='$registration'";
$result=mysqli_query($conn, $sql);
if($result){
    $num=mysqli_num_rows($result);
    if($num>0){
        $no=1;
    }else{
        if($password==$confirmpassword){
        $query="INSERT INTO registration VALUES('', '$fullname', '$registration', '$email', '$phonenumber', '$encpassword', '$encconfirmpassword', '$gender')";
        $success=mysqli_query($conn, $query);
        if($success){
            $yes=1;
        }
        }else{
            $match=1;
    }
    }
}
?>

<?php
if($no){
    echo"
    <script>alert('User exists');</script>
    ";
}

if($yes){
    echo"
    <script>alert('Registered Successfully');
    document.location.href = 'index.php'; 
    </script>
    ";
}
if($match){
    echo"
    <script>alert('Password not matched');</script>
    ";
}
?>