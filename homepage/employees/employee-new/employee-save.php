<?php
$name = $_POST["eName"];
$phone = $_POST["ePhone"];
$address = $_POST["eAddress"];
$email = $_POST["eEmail"];
$dID = $_POST["dID"];
$bsalary = $_POST["bsalary"];
$conn = mysqli_connect('localhost', 'root', '', '3arabity');
$sql = "INSERT INTO employees (name ,phone ,address ,email ,department_id ,basic_salary) VALUES ('$name', '$phone', '$address', '$email','$dID','$bsalary')";
mysqli_query($conn, $sql);
header("Location:../employee-list/employee-list.php");
