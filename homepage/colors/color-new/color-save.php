<?php
$name = $_POST["colorName"];
$conn = mysqli_connect('localhost', 'root', '', '3arabity');
$sql = "INSERT INTO colors (name) VALUES ('$name')";
mysqli_query($conn, $sql);
header("Location:../color-list/color-list.php");
