<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change page</title>
    <link rel="stylesheet" href="..\css\change.css">
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
        <div class="form">
            <form action="" method="post">
                <h2>CHANGE PASSWORD</h2>
                <?php if(!empty($_GET['error'])){?>
                    <p class="error"><?php echo $_GET['error']; ?></p> 
                <?php }?>
                <?php if(!empty($_GET['success'])){?>
                    <p class="success"><?php echo $_GET['success']; ?></p> 
                <?php }?>
                <input type="password" name="op" placeholder="Enter your Old password">
                <input type="password" name="np" placeholder="Enter your New password">
                <input type="password" name="cnp" placeholder="Confirm your New password">
                <div class="submit">
                    <input type="submit" value="CHANGE">
                </div>
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
session_start();
if(!empty($_SESSION['registration'])){
    include 'connect.php';

if(!empty($_POST['op']) && !empty($_POST['np']) && !empty($_POST['cnp'])){
    function validate($data){
    $data = trim($data);    
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
    
    $op = validate($_POST['op']);
    $np = validate($_POST['np']);
    $cnp = validate($_POST['cnp']);

    if(empty($op)){
        header("location:change.php?error=Old password is required");
        exit();
    }else if(empty($np)){
        header("location:change.php?error=New password is required");
        exit();
    }else if($np !== $cnp){
        header("location:change.php?error=Password not matched");
        exit();
    }else{
        $op = md5($op);
        $np = md5($np);
        $registration = $_SESSION['registration'];

        $sql="SELECT password FROM registration WHERE registration='$registration' AND password='$op'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) ===1){
            $sql2="UPDATE registration SET password='$np' WHERE id='$id'";
            mysqli_query($conn, $sql2);
            header("location:change.php?success=Password changed successfully");
            exit();
        }else{
            header("location:change.php?error=Incorrect password");
            exit();
        }
    }

}else{
    header("location:change.php");
    exit();
}

}else{
    // header("location:studentpage.php");
    exit();
}
?>