<?php

$con = mysqli_connect('localhost','root','','students');
$sql = "SELECT * FROM students_list";
$result = mysqli_query($con,$sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DWMTEC Students list</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
       
        <div class="row">
           <a href="insert.php">
               <div class="btn">
                   Add me
               </div>
           </a>
            <h1>Students list</h1>
            <table class="headtable">
                   
                        <tr >
                            <th>SL No.</th>
                            <th>Name</th>
                            <th>Roll No.</th>
                            <th>Department</th>
                            <th>Mobile Number</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                <?php
                
                while($row = mysqli_fetch_assoc($result)){
                
                 ?>
                        <tr>
                           <td><?php echo $row['No']; ?></td>
                           <td><?php echo $row['name']; ?></td>
                           <td><?php echo $row['roll']; ?></td>
                           <td><?php echo $row['dept']; ?></td>
                           <td><?php echo $row['mobile']; ?></td>
                           <td><?php echo $row['email']; ?></td>
                           <td>
                               <a href="show.php?No=<?php echo $row['No']; ?>"><span class="btn1">view</span></a>
                               <a href="edit.php?No=<?php echo $row['No']; ?>"><span class="btn2">edit</span></a>
                               <a href="delete.php?No=<?php echo $row['No']; ?>"><span class="btn3">delete</span></a>
                           </td>
                       </tr>
                   <?php } ?>
            </table>
        </div>
    </section>
</body>
</html>