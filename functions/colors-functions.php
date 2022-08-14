<?php
function colors_update($id,$name){
  global $conn;
  $sql = "UPDATE colors SET name='$name' WHERE id='$id'";
  mysqli_query($conn, $sql);
  header("Location:../color-list/color-list.php");
};

function colors_edit($id){
  $conn = mysqli_connect('localhost', 'root', '', '3arabity');
  $sql = "SELECT * FROM colors WHERE id='$id'";
  $data = mysqli_query($conn, $sql);
  $color = mysqli_fetch_assoc($data);
  return $color;
};

function colors_delete($id ,$action){
  global $conn;
  if($action=="delete"){
    $sql = "UPDATE colors SET active= 0 WHERE id=$id";
      header("Location:color-list.php");
  }if ($action=="restore") {
    $sql = "UPDATE colors SET active= 1 WHERE id=$id";
      header("Location:colors-trash.php");
  }
  mysqli_query($conn, $sql);

};

function colors_list($x="list"){
  global $conn;
  if($x=="list"){
      $sql = "SELECT * FROM colors WHERE active=1";
  }elseif ($x=="trash") {
      $sql = "SELECT * FROM colors WHERE active=0";
  }
  $data = mysqli_query($conn, $sql);
  return $data;
};

function colors_new($name){
  global $conn;
  $sql = "INSERT INTO colors (name) VALUES ('$name')";
  mysqli_query($conn, $sql);
  header("Location:../color-list/color-list.php");
};
?>
