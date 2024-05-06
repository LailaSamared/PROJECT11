<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accounts page</title>
    <link rel="stylesheet" href="..\css\dep.css">
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
        <div class="details">
            <h6>ACCOUNTS SECTION</h6>
            <table id="customers">
            <?php
                require 'connect.php';
                $query = "select * from admin_data where officeid='Accounts'";
                $result = mysqli_query($conn, $query);
                ?>
                <tr>
                  <th>Comments</th>
                  <th>Items Due</th>
                  <th>Name of Bursar</th>
                  <th>Signature</th>
                </tr>
                <tr>
                <?php
                while($row = mysqli_fetch_assoc($result))
                {
                ?>
                <td><?php echo $row['comments'];?></td>
                <td><?php echo $row['item'];?></td>
                <td><?php echo $row['issuer'];?></td>
                <td><?php echo $row['signature'];?></td>
                </tr>
                <?php
                }
                ?>
              </table>
    </div>
    <form class="kati" action="" method="post">
                <button>
                <input type="submit" value="SEE CLEARANCE STATUS"  name="goto">
                </button>
              </form>
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
error_reporting(0);

if(!empty($_POST["goto"])){
    $task="select * from admin_data where item='none'";
    $check=mysqli_query($conn, $task);

    while(mysqli_fetch_assoc($check)){
        echo "
        <script> alert('Cleared successfully');
        document.location.href = 'complete.php';  
        </script>
        "; 
    }
}
?>
