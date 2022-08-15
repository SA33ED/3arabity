<?php
function models_update($id,$name,$bid){
  global $conn;
  $sql = "UPDATE models SET name='$name', brand_id='$bid' WHERE id='$id'";
  mysqli_query($conn, $sql);
  header('Location:../model-list/model-list.php');
};

function models_edit($id){
  global $conn;
  $sql = "SELECT * FROM models WHERE id='$id'";
  $data = mysqli_query($conn, $sql);
  $model = mysqli_fetch_assoc($data);
  return $model;
};

function models_delete($id,$action){
  global $conn;
  if($action=="delete"){
    $sql = "UPDATE models SET active= 0 WHERE id=$id";
    header("Location:model-list.php");
  }if ($action=="restore") {
    $sql = "UPDATE models SET active= 1 WHERE id=$id";
      header("Location:model-trash.php");
  }
  mysqli_query($conn, $sql);

};

function models_list($x="list"){
  global $conn;
  if($x=="list"){
      $sql = "SELECT * FROM models WHERE active=1";
  }elseif ($x=="trash") {
      $sql = "SELECT * FROM models WHERE active=0";
  }
  $data = mysqli_query($conn, $sql);
  return $data;
};

function models_new($name){
  global $conn;
  $sql = "INSERT INTO colors (name) VALUES ('$name')";
  mysqli_query($conn, $sql);
  header("Location:../color-list/color-list.php");
};
?>
