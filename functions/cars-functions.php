<?php
function cars_update($id,$model_id,$color_id,$plate_number,$year_id,$price_per_hour){
  global $conn;
  $sql = "UPDATE cars SET model_id='$model_id' , color_id='$color_id' , price_per_hour='$price_per_hour' , plate_number='$plate_number' , year_id='$year_id' WHERE id='$id'";
  mysqli_query($conn, $sql);
  header("Location:../cars-list/car-list");
};

function cars_edit($id){
  global $conn;
  $sql = "SELECT * FROM cars WHERE id='$id'";
  $data = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($data);
  return $row;
};

function cars_delete($id ,$action){
  global $conn;
  if($action=="delete"){
    $sql = "UPDATE cars SET active= 0 WHERE id=$id";
      header("Location:car-list.php");
  }if ($action=="restore") {
    $sql = "UPDATE cars SET active= 1 WHERE id=$id";
      header("Location:car-trash.php");
  }
  mysqli_query($conn, $sql);

};

function cars_list($x="list"){
  global $conn;
  if($x=="list"){
      $sql = "SELECT * FROM cars WHERE active=1";
  }elseif ($x=="trash") {
      $sql = "SELECT * FROM cars WHERE active=0";
  }
  $data = mysqli_query($conn, $sql);
  return $data;
};

function cars_new($model_id,$color_id,$plate_number,$year_id,$price_per_hour){
      global $conn;
      $sql = "INSERT INTO cars (model_id , color_id , plate_number , year_id , price_per_hour) VALUES ('$model_id', '$color_id', '$plate_number' , '$year_id' , '$price_per_hour')";
      mysqli_query($conn, $sql);
      header("Location:../cars-list/car-list.php");
}
?>
