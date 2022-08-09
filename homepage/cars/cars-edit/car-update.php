<?php
$id = $_POST['carID'];
$model_id = $_POST['model_id'];
$color_id = $_POST['color_id'];
$plate_number = $_POST['plate_number'];
$year_id = $_POST['year_id'];
$price_per_hour = $_POST['p_p_h'];
$conn = mysqli_connect('localhost', 'root', '', '3arabity');
$sql = "UPDATE cars SET model_id='$model_id' , color_id='$color_id' , price_per_hour='$price_per_hour' , plate_number='$plate_number' , year_id='$year_id' WHERE id='$id'";
mysqli_query($conn, $sql);
header("Location:../cars-list/car-list");
