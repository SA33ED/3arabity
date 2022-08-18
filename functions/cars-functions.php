<?php
function cars_update($id,$model_id,$color_id,$plate_number,$year_id,$price_per_hour,$imagefile){
  global $conn;
  if($imagefile["name"] != ""){
    // Getting the Image Temp Name
    $tmp_name = $imagefile["tmp_name"];
    // Setting the Image Location
    $location = "../../../img/cars/";
    // Naming Algorithm
    $filename = strtolower($plate_number);
    $filename = str_replace("-", "S", $filename);
    $filename = $filename . "-logo.png";
    move_uploaded_file($tmp_name, $location . $filename);
    $sql = "UPDATE cars SET model_id='$model_id' , color_id='$color_id' , price_per_hour='$price_per_hour' , plate_number='$plate_number' , year_id='$year_id', image='$filename' WHERE id='$id'";

  }else{
    $sql = "UPDATE cars SET model_id='$model_id' , color_id='$color_id' , price_per_hour='$price_per_hour' , plate_number='$plate_number' , year_id='$year_id' WHERE id='$id'";

  }
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
      $sql = "SELECT cars.* , models.name AS modelName , colors.name AS colorName , years.name AS yearName , brands.name AS brandName FROM cars , models , colors , years , brands WHERE models.id = cars.model_id AND colors.id = cars.color_id AND years.id = cars.year_id AND brands.id=models.brand_id AND cars.active=1";
  }elseif ($x=="trash") {
    $sql = "SELECT cars.* , models.name AS modelName , colors.name AS colorName , years.name AS yearName , brands.name AS brandName FROM cars , models , colors , years , brands WHERE models.id = cars.model_id AND colors.id = cars.color_id AND years.id = cars.year_id AND brands.id=models.brand_id AND cars.active=0";


  }
  $data = mysqli_query($conn, $sql);
  return $data;
};

function cars_new($model_id,$color_id,$plate_number,$year_id,$price_per_hour,$imagename){
      global $conn;
      $sql = "INSERT INTO cars (model_id , color_id , plate_number , year_id , price_per_hour , image) VALUES ('$model_id', '$color_id', '$plate_number' , '$year_id' , '$price_per_hour' , '$imagename')";
      mysqli_query($conn, $sql);
      header("Location:../cars-list/car-list.php");
}
?>
