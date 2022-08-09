<?php
$id = $_POST['yearID'];
$name = $_POST['yearName'];
$conn = mysqli_connect('localhost', 'root', '', '3arabity');
$sql = "UPDATE years SET name='$name' WHERE id='$id'";
mysqli_query($conn, $sql);
header("Location:../years-list/year-list.php");
