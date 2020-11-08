<?php
if(isset($_POST['name'])){
    
    $roll = $_POST['roll'];
    $name = $_POST['name'];
    $dept = $_POST['dept'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    
    $con = mysqli_connect('localhost','root','','students');
    $sql = "insert into students_list(roll,name,dept,mobile,email) values ('$roll','$name','$dept','$mobile','$email')";
    $result = mysqli_query($con,$sql);
    if($result){
        echo "<h1 style='color:green;margin-left:200px;'>"."Your data inserted"."</h1>";
    }else{
        echo "<h1 style='color:red;margin-left:200px;'>"."Not inserted....TRY again"."</h1>";
    }
    
 header ("refresh:2; url=index.php");
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
                    <td>: <input type="number" name="roll" required> </td>
                </tr>
                <tr style="font-size:20px;text-align:left;">
                    <td> Name </td>
                    <td>: <input type="text" name="name" required></td>
                </tr>
                <tr style="font-size:20px;text-align:left;">
                    <td> Department </td>
                    <td>: <input type="text" name="dept" required></td>
                </tr>
                <tr style="font-size:20px;text-align:left;">
                    <td> Mobile Number </td>
                    <td>: <input type="text" name="mobile" required></td>
                </tr>
                <tr style="font-size:20px;text-align:left;">
                    <td> Email </td>
                    <td>: <input type="email" name="email" required></td>
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