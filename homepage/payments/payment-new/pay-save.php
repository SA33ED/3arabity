<?php
$pay = $_POST['pmName'];
$conn = mysqli_connect('localhost', 'root', '', '3arabity');
$sql = "INSERT INTO payment_methods (name) VALUES ('$pay')";
mysqli_query($conn, $sql);
header("Location:../payment-list/payment-list.php");
