<?php
$id = $_POST['dID'];
$name = $_POST['dName'];
$conn = mysqli_connect('localhost', 'root', '', '3arabity');
$sql = "UPDATE departments SET name='$name' WHERE id='$id'";
mysqli_query($conn, $sql);
header("Location:../departments-list/departments-list.php");
