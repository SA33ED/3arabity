<?php 
function payments_update($id,$name){
  global $conn;
  $sql = "UPDATE payment_methods SET name='$name' WHERE id='$id'";
  mysqli_query($conn, $sql);
  header("Location:../payment-list/payment-list.php");
};

function payments_edit($id){
  global $conn;
  $sql = "SELECT * FROM payment_methods WHERE id='$id'";
  $data = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($data);
  return $row;
};

function payments_delete($id,$action){
  global $conn;
  if($action=="delete"){
    $sql = "UPDATE payment_methods SET active= 0 WHERE id=$id";
    header("Location:payment-list.php");
  }if ($action=="restore") {
    $sql = "UPDATE payment_methods SET active= 1 WHERE id=$id";
    header("Location:payment-trash.php");
  }
  mysqli_query($conn, $sql);
};

function payments_list($x="list"){
  global $conn;
  if($x=="list"){
      $sql = "SELECT * FROM payment_methods WHERE active=1";
  }elseif ($x=="trash") {
      $sql = "SELECT * FROM payment_methods WHERE active=0";
  }
  $data = mysqli_query($conn, $sql);
  return $data;
};

function payments_new($name){
  global $conn;
  $sql = "INSERT INTO payment_methods (name) VALUES ('$name')";
  mysqli_query($conn, $sql);
  header("Location:../payment-list/payment-list.php");
};
?>
