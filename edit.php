<?php
$No = $_GET['No'];
$con = mysqli_connect('localhost','root','','students');
$sql = "SELECT * FROM students_list WHERE No=$No";
$result = mysqli_query($con,$sql);
$student = mysqli_fetch_assoc($result);

if(isset($_POST['name'])){
    
    $roll = $_POST['roll'];
    $name = $_POST['name'];
    $dept = $_POST['dept'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    
    $sql = "update students_list set roll=$roll,name='$name',dept='$dept',mobile='$mobile',email='$email' where No=$No";
    mysqli_query($con,$sql);
    
 header ("location:show.php?No=" .$No);
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale-1, shrink-to-fit=no">
    <title>DWMTEC Students list</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
       
        <div class="row">
           <a href="index.php">
               <div class="btn">
                   Back
               </div>
           </a>
            <h1>Students list</h1>
            <table style="width:auto; ">
               
                <form action="" method="post">
                   
                    <tr style="font-size:20px;text-align:left;">
                    <td> Roll </td>
                    <td>: <input type="number" name="roll" value="<?php echo $student['roll']; ?>" required> </td>
                </tr>
                <tr style="font-size:20px;text-align:left;">
                    <td> Name </td>
                    <td>: <input type="text" name="name" value="<?php echo $student['name']; ?>" required></td>
                </tr>
                <tr style="font-size:20px;text-align:left;">
                    <td> Department </td>
                    <td>: <input type="text" name="dept" value="<?php echo $student['dept']; ?>" required></td>
                </tr>
                <tr style="font-size:20px;text-align:left;">
                    <td> Mobile Number </td>
                    <td>: <input type="text" name="mobile" value="<?php echo $student['mobile']; ?>" required></td>
                </tr>
                <tr style="font-size:20px;text-align:left;">
                    <td> Email </td>
                    <td>: <input type="email" name="email" value="<?php echo $student['email']; ?>" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td style="text-align: left;
                        padding-left: 10px;"><input type="submit" value="Submit"></td>
                </tr>
                </form>
                
            </table>
           
        </div>
    </section>
</body>
</html>