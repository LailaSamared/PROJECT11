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
    <link rel="stylesheet" href="..\css\upload.css">
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
        CLEARANCE MANAGEMENT SYSTEM</h3>

<div class="pic" style="
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    min-height: 60vh;
    ">
    <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
    <input type="file" name="image" id="image">
    <input type="submit" name="upload" value="upload">
    </form>
    
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
require 'connect.php';
if(!empty($_POST["upload"])){
    if($_FILES["image"]["error"] ===4){
        echo "
        <script> alert('image does not exist');</script>
        ";
    }else{
        $name = $_FILES["image"]["name"];
        $size = $_FILES["image"]["size"];
        $temp = $_FILES["image"]["temp"];

        $extension= [''];
        $imgextension= explode('.', $filename);
        $imgextension= strtolower(end($imgextension));
        if(!in_array($imgextension, $extension)){
            echo "
        <script> alert('Invalid image extension');</script>
        ";
        }
        else if($filesize> 1000000){
            echo "
            <script> alert('Image size is too big');</script>
            ";  
        }else{
            $newimgname= uniqid();
            $newimgname .='.'. $imgextension;

            move_uploaded_file($temp, "uploads/".$newimgname);
            $query= "INSERT INTO uploads VALUES('', '$newimgname')";
            mysqli_query($conn, $query);
            session_start();
            $_SESSION['newimgname'] = $newimgname;
            echo "
            <script> alert('Uploaded successfully');
            document.location.href = 'form.php';  
            </script>
            ";  

        }
    }
}
?>