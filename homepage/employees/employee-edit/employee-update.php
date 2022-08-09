<?php
$id = $_POST["eID"];
$name = $_POST["eName"];
$phone = $_POST["ePhone"];
$address = $_POST["eAddress"];
$email = $_POST["eEmail"];
$dID = $_POST["dID"];
$bsalary = $_POST["bsalary"];


$conn = mysqli_connect('localhost', 'root', '', '3arabity');
$sql = "UPDATE employees
SET name = '$name' , phone = '$phone' , address = '$address' , email ='$email' , department_id='$dID' , basic_salary='$bsalary'
WHERE id ='$id';";


mysqli_query($conn, $sql);
header("Location:../employee-list/employee-list.php");
