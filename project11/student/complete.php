<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student's page</title>
    <link rel="stylesheet" href="..\css\spage.css">
</head>
<body>
    <div class="main">
        <div class="dropdown">
        <p class="dropbtn"> <img src="images/avatar3.jpg" class="avpic">
         <?php 
         echo $_SESSION['registration'];
         ?></p>
            <div class="dropdown-content">
                <a href="change.php">Change Password</a>  
                <a href="index.php">Logout</a>  
            </div>
        </div>
        <h3> <span> ARDHI UNIVERSITY </span> <br>
        CLEARANCE MANAGEMENT SYSTEM</h7>
        <div class="verf">
            <h2>Clearance Progress</h2>
            <div class="prog">
                    Department:<img src="images/ready.png" alt="" class="im"><br> 
                    Library:<img src="images/ready.png" alt="" class="im"><br>
                    Survey:<img src="images/ready.png" alt="" class="im"><br>
                    Games:<img src="images/ready.png" alt="" class="im"><br>
                    Halls of Residence:<img src="images/ready.png" alt="" class="im"><br>
                    Accounts:<img src="images/ready.png" alt="" class="im"><br>
                    Dean of students:<img src="images/ready.png" alt="" class="im"><br>
                    Academic:<img src="images/ready.png" alt="" class="im"><br>
            </div>
        </div>
    </div>
    <div class="branch">
        <img src="logo.png" id="logo" alt="">
                <div class="dropdown1">
                        <button class="dropbtn1">Form</button> 
                <div class="dropdown-content1">
                    <a href="form.php">Fill Clearance form</a>  
                    <a href="clear.php">View Cleared form</a>  
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