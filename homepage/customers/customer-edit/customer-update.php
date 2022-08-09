<?php
$id = $_POST["cID"];
$name = $_POST["cName"];
$phone = $_POST["cPhone"];
$address = $_POST["cAddress"];
$email = $_POST["cEmail"];
$bdate = $_POST["cBdate"];
$city_id = $_POST["cityID"];
$id_number = $_POST["cNI"];


$conn = mysqli_connect('localhost', 'root', '', '3arabity');
$sql = "UPDATE Customers
SET name = '$name' , phone = '$phone' , address = '$address' , email ='$email' , bdate = '$bdate' , city_id ='$city_id' , id_number ='$id_number'
WHERE id = $id;";


mysqli_query($conn, $sql);
header("Location:../customers-list/customersList");
