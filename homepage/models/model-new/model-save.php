<?php
$name = $_POST['modelName'];
$bid = $_POST['brandID'];
$conn = mysqli_connect('localhost', 'root', '', '3arabity');
$sql = "INSERT INTO models (name , brand_id) VALUES ('$name','$bid')";
mysqli_query($conn, $sql);
header("Location:../model-list/model-list.php");
