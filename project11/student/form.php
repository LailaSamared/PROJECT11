<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form page</title>
    <link rel="stylesheet" href="..\css\form.css">
</head>
<body>
    <div class="main">
        <div class="dropdown">
            <p class="dropbtn"> <img src="images/avatar3.jpg" class="avpic">
            <?php 
            echo $_SESSION['registration'];?>
            </p>
            <div class="dropdown-content">
                <a href="change.php">Change Password</a>  
                <a href="index.php">Logout</a>  
            </div>
        </div>
        <h3> <span> ARDHI UNIVERSITY </span> <br>
        CLEARANCE MANAGEMENT SYSTEM</h3>
        <div class="container">
            <h5 class="formtitle">REQUEST FOR CLEARANCE</h5> 
            <form action="" method="post" enctype="multipart/form-data">
                <div class="maininfo">
                    <div class="userinput">
                        <label for="surname">Surname</label>
                        <input type="varchar"
                                id="surname"
                                name="surname"
                                placeholder="Enter Surname"/>
                    </div>
                    <div class="userinput">
                        <label for="Firstname">Firstname</label>
                        <input type="varchar"
                                id="Firstname"
                                name="firstname"
                                placeholder="Enter Firstname"/>
                    </div>
                    <div class="userinput">
                        <label for="Middle Name">Middle Name</label>
                        <input type="varchar"
                                id="Middle Name"
                                name="middlename"
                                placeholder="Enter your Middle Name"/>
                    </div>
                    <div class="userinput">
                        <label for="Name of Department">Name of Department</label>
                        <select name="department" id="select1">
                            <option value="">Select</option>
                            <option value="Arch">Architecture</option>
                            <option value="BE">Building Economics</option>
                            <option value="ID">Interior Design</option>
                            <option value="GST">Geospatial Sciences and Technology</option>
                            <option value="CSM">Computer Systems and Mathematics</option>
                            <option value="BS">Business Studies</option>
                            <option value="LMV">Land Management and Valuation</option>
                            <option value="CEE">Civil and Environmental Engineering</option>
                            <option value="ESM">Environmental Science and Management</option>
                            <option value="URP">Urban and Regional Planning</option>
                            <option value="ESS">Economics and Social Studies</option>
                        </select>
                    </div>
                    <div class="userinput">
                        <label for="Completion Year">Completion Year</label>
                        <input type="number"
                                id="number"
                                name="completed"
                                placeholder="Enter Your Completion Year"/>
                    </div>
                    <div class="userinput">
                        <label for="Registration number">Registration Number</label>
                        <input type="varchar"
                                id="Registration number"
                                name="regno"
                                placeholder="Enter registration number"/>
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
                <a href="upload.php" style="text-decoration: none; 
                color: red;
                font-size: 20px;
                ">CLICK HERE TO UPLOAD YOUR PHOTO</a>
            </form>    
        </div>
    </div>
    <div class="branch">
        <img src="logo.png" id="logo" alt="">
                <div class="dropdown1">
                        <button class="dropbtn1">Form</button> 
                <div class="dropdown-content1">
                    <a href="form.php">Fill Clearance form</a>  
                    <a href="#">View Cleared form</a>  
                </div>
                </div>
                <div class="dropdown2">
                    <button class="dropbtn2"><a href="dep.php">Department</a></button> 
            </div>
            <div class="dropdown3">
                <button class="dropbtn3"><a href="library.php">Library</a></button> 
            </div>
            <div class="dropdown4">
                <button class="dropbtn4"><a href="survey.php">Survey</a></button> 
            </div>
            <div class="dropdown5">
                <button class="dropbtn5"><a href="games.php">Games</a></button> 
            </div>
            <div class="dropdown6">
                    <button class="dropbtn6"><a href="halls.php">Halls of residence</a></button> 
            </div>
            <div class="dropdown7">
                    <button class="dropbtn7"><a href="accounts.php">Accounts</a></button> 
            </div>           
    </div>    
</body>
</html>

<?php
error_reporting(0);
require 'connect.php';
$yes=0;
$no=0;

if(!empty($_POST["submit"])){
    $surname= $_POST["surname"];
    $firstname= $_POST["firstname"];
    $middlename= $_POST["middlename"];
    $department= $_POST["department"];
    $completed= $_POST["completed"];
    $regno= $_POST["regno"];
    $gender= $_POST["gender"];
}

$sql= "Select * from registration where registration='$registration'";
$result=mysqli_query($conn, $sql);
if($result){
    $num=mysqli_num_rows($result);
    if($num=0){
        $no=1;
    }else{
        $query="INSERT INTO request_form VALUES('', '$surname', '$firstname', '$middlename', '$department', '$completed', '$regno', '$gender')";
        $success=mysqli_query($conn, $query);
        if($success){
            $yes=1;
        }
    } 
}
?>

<?php
if($no){
    echo"
    <script>alert('User not Registered');</script>
    ";
}

if($yes){
    echo"
    <script>alert('Request sent Successfully');</script>
    ";
}

?>
