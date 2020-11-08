<?php
$No = $_GET['No'];
$con = mysqli_connect('localhost','root','','students');
$sql = "delete from students_list WHERE No=$No";
$result = mysqli_query($con,$sql);
$student = mysqli_fetch_assoc($result);

header("location:index.php");

?>