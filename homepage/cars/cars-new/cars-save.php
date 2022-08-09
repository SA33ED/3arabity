<?php
$model_id = $_POST['model_id'];
$color_id = $_POST['color_id'];
$plate_number = $_POST['plate_number'];
$year_id = $_POST['year_id'];
$price_per_hour = $_POST['p_p_h'];

$conn = mysqli_connect('localhost', 'root', '', '3arabity');
$sql = "INSERT INTO cars (model_id , color_id , plate_number , year_id , price_per_hour) VALUES ('$model_id', '$color_id', '$plate_number' , '$year_id' , '$price_per_hour')";
mysqli_query($conn, $sql);
header("Location:../cars-list/car-list.php");
