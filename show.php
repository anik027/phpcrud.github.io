<?php
$No = $_GET['No'];
$con = mysqli_connect('localhost','root','','students');
$sql = "SELECT * FROM students_list WHERE No=$No";
$result = mysqli_query($con,$sql);
$student = mysqli_fetch_assoc($result);

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
            <table style="width:auto; margin:auto; ">
                <tr style="font-size:20px;text-align:left;">
                    <td> Roll </td>
                    <td>: <?php echo $student['roll']; ?></td>
                </tr>
                <tr style="font-size:20px;text-align:left;">
                    <td> Name </td>
                    <td>: <?php echo $student['name']; ?></td>
                </tr>
                <tr style="font-size:20px;text-align:left;">
                    <td> Department </td>
                    <td>: <?php echo $student['dept']; ?></td>
                </tr>
                <tr style="font-size:20px;text-align:left;">
                    <td> Mobile Number </td>
                    <td>: <?php echo $student['mobile']; ?></td>
                </tr>
                <tr style="font-size:20px;text-align:left;">
                    <td> Email </td>
                    <td>: <?php echo $student['email']; ?></td>
                </tr>
                
            </table>
           
        </div>
    </section>
</body>
</html>