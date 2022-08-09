<?php
$name = $_POST['dName'];
$conn = mysqli_connect('localhost', 'root', '', '3arabity');
$sql = "INSERT INTO departments (name) VALUES ('$name')";
mysqli_query($conn, $sql);
header("Location:../departments-list/departments-list.php");
