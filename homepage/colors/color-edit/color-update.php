<?php
$id = $_POST["colorID"];
$name = $_POST["colorName"];
$conn = mysqli_connect('localhost', 'root', '', '3arabity');
$sql = "UPDATE colors SET name='$name' WHERE id='$id'";
mysqli_query($conn, $sql);
header("Location:../color-list/color-list.php");
