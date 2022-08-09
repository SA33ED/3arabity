<?php
$conn = mysqli_connect('localhost', 'root', '', '3arabity');
$name = $_POST["cName"];
$ni = $_POST["cNI"];
$phone = $_POST["cPhone"];
$address = $_POST["cAddress"];
$email = $_POST["cEmail"];
$bdate = $_POST["cBdate"];
$city = $_POST["city_id"];
$sql = "INSERT INTO customers (name , id_number , phone , address , email , bdate , city_id) VALUES ('$name' ,'$ni','$phone','$address','$email','$bdate','$city')";
mysqli_query($conn, $sql);
header("Location:../customers-list/customersList.php");
