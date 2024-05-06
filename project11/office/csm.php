<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department page</title>
    <link rel="stylesheet" href="..\css\in.css">
</head>
<body>
    <div class="main">
        <h3> <span> ARDHI UNIVERSITY </span> <br>
        CLEARANCE MANAGEMENT SYSTEM</h3>
        <div class="details">
        <h6>DEPARTMENT OF COMPUTER SYSTEMS AND MATHEMATICS <br>CLEARANCE REQUESTS</h6>
            <table id="customers">
            <?php
                require 'connect.php';
                $query = "select * from request_form where department='CSM'";
                $result = mysqli_query($conn, $query);
                ?>
                <tr>
                  <th>Surname</th>
                  <th>First Name</th>
                  <th>Middle Name</th>
                  <th>Department</th>
                  <th>Completion Year</th>
                  <th>Registration Number</th>
                  <th>Gender</th>
                  <th>Student registration no:</th>
                  <th>Office Name</th>
                  <th>Comments</th>
                  <th>Items Due</th>
                  <th>Name of Issuer</th>
                  <th>Signature</th>
                  <th>Date Issued</th>
                  <th>Action</th>
                </tr>
                <tr>
                <?php
                while($row = mysqli_fetch_assoc($result))
                {
                ?>
                <td><?php echo $row['surname'];?></td>
                <td><?php echo $row['firstname'];?></td>
                <td><?php echo $row['middlename'];?></td>
                <td><?php echo $row['department'];?></td>
                <td><?php echo $row['completed'];?></td>
                <td><?php echo $row['regno'];?></td>
                <td><?php echo $row['gender'];?></td>
                <form action="" method="post">
                  <td><input type="text" name="studentid"></td>
                  <td>
                  <select name="officeid">
                  <option value="">Select Office</option>
                  <option value="Accounts">Accounts</option>
                  <option value="Games">Games</option>
                  <option value="Library">Library</option>
                  <option value="Residence">Residence</option>
                  <option value="Survey">Survey</option>
                  <option value="Department">Department</option>
                  <!-- <option value="Arch">Arch</option>
                  <option value="BE">BE</option>
                  <option value="BS">BS</option>
                  <option value="CEE">CEE</option>
                  <option value="CSM">CSM</option>
                  <option value="ESM">ESM</option>
                  <option value="ESS">ESS</option>
                  <option value="GST">GST</option>
                  <option value="ID">ID</option>
                  <option value="LMV">LMV</option>
                  <option value="URP">URP</option> -->
                  </select>
                  </td>
                  <td>
                  <select name="comments">
                  <option value="">Select a Comment</option>
                  <option value="nil">Nil</option>
                  <option value="unpaid">Not paid</option>
                  </select>
                  </td>
                  <td>
                  <select name="item">
                  <option value="">Select an Item</option>
                  <option value="none">none</option>
                  <option value="fees">Fees</option>
                  <option value="directcost">Direct Costs</option>
                  <option value="other">Other(Get further explanation from office)></option> 
                  </select>
                  </td>
                  <td><input type="text" name="issuer"></td>
                  <td><input type="text" name="signature"></td>
                  <td><input type="date" name="date"></td>
                  <td>
                  <input type="submit" value="FORWARD TO OTHER OFFICES" name="send2">
                  </td>
            </form>
                </tr>
                <?php 
                }
                ?>

              </table>
    </div>
    <div class="branch">
        <img src="logo.png" id="logo" alt="">
            <div class="dropdown6">
                    <button class="dropbtn6"><a href="#">Clearance Requests</a></button> 
            </div>
            <div class="dropdown7">
                    <button class="dropbtn7"><a href="admin.php">Logout</a></button> 
            </div>           
    </div>    
</body>
</html>

<?php
error_reporting(0);
require 'connect.php';

if(!empty($_POST["send2"])){
    $studentid= $_POST["studentid"];
    $officeid= $_POST["officeid"];
    $comments= $_POST["comments"];
    $item= $_POST["item"];
    $issuer= $_POST["issuer"];
    $signature= $_POST["signature"];
    $date= $_POST["date"];
}

$query="INSERT INTO admin_data VALUES('', '$studentid', '$officeid', '$comments', '$item', '$issuer', '$signature', '$date')";
mysqli_query($conn, $query);
echo"
    <script>alert('Forwarded Successfully');</script>
    ";
?> 