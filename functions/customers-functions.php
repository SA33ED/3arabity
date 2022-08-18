<?php
function customers_update($id,$name,$phone,$address,$email,$bdate,$city_id,$id_number){
  global $conn;
  $sql = "UPDATE Customers
  SET name = '$name' , phone = '$phone' , address = '$address' , email ='$email' , bdate = '$bdate' , city_id ='$city_id' , id_number ='$id_number'
  WHERE id = $id;";
  mysqli_query($conn, $sql);
  header("Location:../customers-list/customersList");
};

function customers_edit($id){
  global $conn;
  $sql = "SELECT * FROM customers WHERE id='$id'";
  $data = mysqli_query($conn, $sql);
  $customer = mysqli_fetch_assoc($data);
  return $customer;
};

function customers_delete($id,$action){
  global $conn;
  if($action=="delete"){
    $sql="UPDATE customers SET active=0 WHERE id=$id;";
      header("Location:customersList.php");
  }elseif ($action=="restore") {
    $sql="UPDATE customers SET active=1 WHERE id=$id;";
    header("Location:customers-trash.php");
  }
  $data = mysqli_query($conn, $sql);

};

function customers_list($x="list"){
  global $conn;
  if($x=="list"){
      //$sql = "SELECT * FROM customers WHERE active=1";
      $sql = "SELECT customers.*, cities.name AS cityname FROM customers, cities WHERE cities.id = customers.city_id AND customers.active=1";

  }elseif($x=="trash"){
    $sql = "SELECT customers.*, cities.name AS cityname FROM customers, cities WHERE cities.id = customers.city_id AND customers.active=0";

  };
  $data = mysqli_query($conn, $sql);
  return $data;
};
//$sql = "SELECT customers.*, cities.name AS cityname FROM customers, cities WHERE cities.id = customers.city_id AND customers.active=1";

function customers_new($name,$ni,$phone,$address,$email,$bdate,$city){
  global $conn;
  $sql = "INSERT INTO customers (name , id_number , phone , address , email , bdate , city_id) VALUES ('$name' ,'$ni','$phone','$address','$email','$bdate','$city')";
  mysqli_query($conn, $sql);
  header("Location:../customers-list/customersList.php");
};
?>
