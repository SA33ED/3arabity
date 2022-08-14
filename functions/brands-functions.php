<?php
function brands_update($brandID,$newBrand){
  global $conn;
  $sql = "UPDATE brands SET name='$newBrand' WHERE id='$brandID'";
  mysqli_query($conn, $sql);
  header("Location:../brand-list/brand-list.php");
};

function brands_edit($id){
  global $conn;
  $sql = "SELECT * FROM brands WHERE id='$id'";
  $data = mysqli_query($conn, $sql);
  $brand = mysqli_fetch_assoc($data);
  return $brand;
};

function brands_delete($id ,$action){
  global $conn;
  if($action=="delete"){
    $sql = "UPDATE brands SET active= 0 WHERE id=$id";
      header("Location:brand-list.php");
  }if ($action=="restore") {
    $sql = "UPDATE brands SET active= 1 WHERE id=$id";
      header("Location:brand-trash.php");
  }
  mysqli_query($conn, $sql);

};

function brands_list($x="list"){
  global $conn;
  if($x=="list"){
      $sql = "SELECT * FROM brands WHERE active=1";
  }elseif ($x=="trash") {
      $sql = "SELECT * FROM brands WHERE active=0";
  }
  $data = mysqli_query($conn, $sql);
  return $data;
};

function brands_new($brand){
      global $conn;
      $sql = "INSERT INTO brands (name) VALUES ('$brand')";
      mysqli_query($conn, $sql);
      header("Location:../brand-list/brand-list.php");
}
?>
