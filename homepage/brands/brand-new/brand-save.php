<?php
$brand = $_POST["brandName"];
$conn = mysqli_connect('localhost', 'root', '', '3arabity');
$sql = "INSERT INTO brands (name) VALUES ('$brand')";
mysqli_query($conn, $sql);
header("Location:../brand-list/brand-list.php");
