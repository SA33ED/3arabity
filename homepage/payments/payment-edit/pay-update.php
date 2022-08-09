<?php
$id = $_POST["pmID"];
$name = $_POST["pmName"];
$conn = mysqli_connect('localhost', 'root', '', '3arabity');
$sql = "UPDATE payment_methods SET name='$name' WHERE id='$id'";
mysqli_query($conn, $sql);
header("Location:../payment-list/payment-list.php");
