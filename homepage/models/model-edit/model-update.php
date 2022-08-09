<?php
$conn = mysqli_connect('localhost', 'root', '', '3arabity');
$id = $_POST['modelID'];
$name = $_POST['modelName'];
$bid = $_POST['brandID'];
$sql = "UPDATE models SET name='$name' , brand_id='$bid' WHERE id='$id'";
mysqli_query($conn, $sql);
header('Location:../model-list/model-list.php');
