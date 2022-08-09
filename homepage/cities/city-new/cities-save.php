<?php
$city = $_POST["cityName"];
$conn = mysqli_connect('localhost', 'root', '', '3arabity');
$sql = "INSERT INTO cities (name) VALUES ('$city')";
mysqli_query($conn, $sql);
header("Location:../cities-list/citiesList.php");
