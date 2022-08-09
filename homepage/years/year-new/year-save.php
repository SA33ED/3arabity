<?php
$conn = mysqli_connect('localhost', 'root', '', '3arabity');
$name = $_POST['yearName'];
$sql = "INSERT INTO years (name) VALUES ('$name')";
mysqli_query($conn, $sql);
header("Location:../years-list/year-list.php");
