<?php
function departments_update($id,$name){
    global $conn;
    $sql = "UPDATE departments SET name='$name' WHERE id='$id'";
    mysqli_query($conn, $sql);
    header("Location:../departments-list/departments-list.php");
};

function departments_edit($id){
    global $conn;
    $sql = "SELECT * FROM departments WHERE id='$id'";
    $data = mysqli_query($conn, $sql);
    $department = mysqli_fetch_assoc($data);
    return $department;
};

function departments_delete($id,$action){
    global $conn;
    if($action=="delete"){
        $sql = "UPDATE departments SET active=0 WHERE id='$id'";
        header("Location:departments-list.php");
    }elseif($action=="restore"){
        $sql = "UPDATE departments SET active=1 WHERE id='$id'";
        header("Location:departments-trash.php");
    }

    $data = mysqli_query($conn, $sql);

};

function departments_list($x="list"){
    global $conn;
    if($x=="list"){
        $sql = "SELECT * FROM departments WHERE active=1";
    }elseif($x=="trash"){
        $sql = "SELECT * FROM departments WHERE active=0";
    }
    $data = mysqli_query($conn, $sql);
    return $data;
};

function departments_new($name){
    global $conn;
    $sql = "INSERT INTO departments (name) VALUES ('$name')";
    mysqli_query($conn, $sql);
    header("Location:../departments-list/departments-list.php");
};


?>
