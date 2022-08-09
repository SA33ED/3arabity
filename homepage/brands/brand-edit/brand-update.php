<?php
$brandID = $_POST["brandID"];
$newBrand = $_POST["nbrandName"];
$conn = mysqli_connect('localhost', 'root', '', '3arabity');
$sql = "UPDATE brands SET name='$newBrand' WHERE id='$brandID'";

mysqli_query($conn, $sql);
header("Location:../brand-list/brand-list.php");
