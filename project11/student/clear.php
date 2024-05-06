<?php
session_start();
error_reporting(0);
require 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form page</title>
    <style>
        .picbox{
            border-style: solid;
            padding: 80px;
            margin: 0px 700px;
            margin-top: -170px
        }
    </style>
    <link rel="stylesheet" href="..\css\clear.css">
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
        <div class="container">
            <h5 class="formtitle">
                ARDHI UNIVERSITY <br>
                <img class="pic" src="images/logo.png"> <br>
                    <div class="picbox"></div>
                LIABILITY CLEARANCE CERTIFICATE FORM <br>
                THIS FORM MUST BE DULLY FILLED, FAILURE TO FILL THE FORM, THE <br>
                EXAMINATION RESULTS SLIP AND CERTIFICATE WILL BE WITHHELD BY THE UNIVERSITY      
            </h5>
            <form action="" method="post">
                
                    <div class="userinput">
                    <p>
                    <?php
                $query = "select * from request_form where id='1'";
                $result = mysqli_query($conn, $query);
                ?>
                <div class="maininfo">
                <?php
                while($row = mysqli_fetch_assoc($result))
                {
                ?>
                    1. The head of Department of(Name of Department)<u><?php echo $row['department'];?></u> <br>
                    I certify that <br>
                    Mr/Mrs/Miss(Name of Student) <u><?php echo $row['surname'];?>,<?php echo $row['firstname'];?><?php echo $row['middlename'];?></u> completion year <u><?php echo $row['completed'];?></u> Reg.No <u><?php echo $row['regno'];?></u> <br>
                    Has/has not returned all equipment given to him/her by my department and that the equipment is not in good <br>
                    order. 
                    <?php
                }
                    ?>
                    <?php
                $query = "select * from admin_data where officeid='Department'";
                $result = mysqli_query($conn, $query);
                ?>
                <div class="maininfo">
                <?php
                while($row = mysqli_fetch_assoc($result))
                {
                ?>
                    Any other comments by the head of department <u><?php echo $row['comments'];?></u>. <br>
                    Name <u><?php echo $row['issuer'];?></u> Signature <u><?php echo $row['signature'];?></u> Date <u><?php echo $row['date'];?></u>
                    </p>
                    <?php
                }
                    ?>
                    </div>
                    <div class="userinput">
                    <?php
                $query = "select * from admin_data where officeid='Library'";
                $result = mysqli_query($conn, $query);
                ?>
                <div class="maininfo">
                <?php
                while($row = mysqli_fetch_assoc($result))
                {
                ?>
                    2. Librarian-ARU. Has the student any outstanding books? Your comments. <br>
                    <u><?php echo $row['comments'];?></u> <br>
                    Name <u><?php echo $row['issuer'];?></u> Title/Post <u>Librarian</u> Signature <u><?php echo $row['signature'];?></u> Date <u><?php echo $row['date'];?></u>
                    <?php
                }
                    ?>    
                </div>
                    <div class="userinput">
                    <?php
                $query = "select * from admin_data where officeid='Survey'";
                $result = mysqli_query($conn, $query);
                ?>
                <div class="maininfo">
                <?php
                while($row = mysqli_fetch_assoc($result))
                {
                ?>
                    3. Land Survey Store. Has the student returned all materials lent to him/her? Your comments. <br>
                    <u><?php echo $row['comments'];?></u> <br>
                    Name <u><?php echo $row['issuer'];?></u> Title/Post <u>Store Regulator</u> Signature <u><?php echo $row['signature'];?></u> Date <u><?php echo $row['date'];?></u>
                    <?php
                }
                    ?>
                </div>
                    <div class="userinput">
                    <?php
                $query = "select * from admin_data where officeid='Games'";
                $result = mysqli_query($conn, $query);
                ?>
                <div class="maininfo">
                <?php
                while($row = mysqli_fetch_assoc($result))
                {
                ?>
                    4. Games Coach. Has the student any sports or game equipment? Your comments. <br>
                    <u><?php echo $row['comments'];?></u> <br>
                    Name <u><?php echo $row['issuer'];?></u> Title/Post <u>Games Coach</u> Signature <u><?php echo $row['signature'];?></u> Date <u><?php echo $row['date'];?></u>
                    <?php
                }
                    ?>    
                </div>
                    <div class="userinput">
                    <?php
                $query = "select * from admin_data where officeid='Residence'";
                $result = mysqli_query($conn, $query);
                ?>
                <div class="maininfo">
                <?php
                while($row = mysqli_fetch_assoc($result))
                {
                ?>
                    5. Hall of Residence-Warden. Has the student lost or broke any property in the halls? Your comments. <br>
                    <u><?php echo $row['comments'];?></u> <br>
                    Name <u><?php echo $row['issuer'];?></u> Title/Post <u>Warden</u> Signature <u><?php echo $row['signature'];?></u> Date <u><?php echo $row['date'];?></u>
                    <?php
                }
                    ?>    
                </div>
                    <div class="userinput">
                    <?php
                $query = "select * from admin_data where officeid='Accounts'";
                $result = mysqli_query($conn, $query);
                ?>
                <div class="maininfo">
                <?php
                while($row = mysqli_fetch_assoc($result))
                {
                ?>
                    6. Accounts Section. Has the student any outstanding loans/debts? Your Comments. <br>
                    <u><?php echo $row['comments'];?></u> <br>
                    Name <u><?php echo $row['issuer'];?></u> Title/Post <u>Accountant</u> Signature <u><?php echo $row['signature'];?></u> Date <u><?php echo $row['date'];?></u>    
                </div>
                    <div class="userinput">
                    7. Dean of Students. I certify that the form has been dully completed and that the student may be given his/her final examination <br>
                    results plus a degree certificate. Your Comments. <br>
                    <u>Nil</u> <br>
                    Name <u>Recent Dean</u> Title/Post <u>Dean of Student</u> Signature <u>Dean signs</u> Date <u><?php echo $row['date'];?></u>   
                </div>
                    <div class="userinput">
                    8. Academic Registration. Having/having not been satisfied that the bearer of this clearance form has no dues to the <br>
                    University we are not ready to give him/her examination results. Your Comments. <br>
                    <u>Nil</u> <br>
                    Name <u>Recent Academic</u> Title/Post <u>Academics Officer</u> Signature <u>Academic signs</u> Date <u><?php echo $row['date'];?></u>   
                    <?php
                }
                    ?>
                </div>
                    <Button class="printable" name="print">PRINT MY FORM</Button>    
                
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
require 'connect.php';

$pdf= new PDF();
if(!empty($_POST["print"])){
    $pdf->AddPage();
    $pdf->setFont("Arial", "8", 19);
    
    $pdf->Output();
    }
?>