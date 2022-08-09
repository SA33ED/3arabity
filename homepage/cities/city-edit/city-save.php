<?php
$id=$_POST["ID"];
$name=$_POST["cityName"];
$conn=mysqli_connect('localhost','root','','3arabity');
$sql="UPDATE cities SET name = '$name' WHERE id='$id'";
mysqli_query($conn,$sql);
header("Location:../cities-list/citiesList.php");
