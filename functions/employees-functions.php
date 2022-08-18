<?php 
function employees_update($id,$name,$phone,$address,$email,$dID,$bsalary){
    global $conn;
    $sql = "UPDATE employees
    SET name = '$name' , phone = '$phone' , address = '$address' , email ='$email' , department_id='$dID' , basic_salary='$bsalary'
    WHERE id ='$id';";
    mysqli_query($conn, $sql);
    header("Location:../employee-list/employee-list.php");
};

function employees_edit($id){
    global $conn;
    $sql = "SELECT * FROM employees WHERE id='$id'";
    $data = mysqli_query($conn, $sql);
    $employee = mysqli_fetch_assoc($data);
    return $employee;
};

function employees_delete($id,$action){
    global $conn;
    if($action=="delete"){
        $sql= "UPDATE employees SET active=0  WHERE id=$id";
        header("Location:employee-list.php");
    }elseif ($action=="restore") {
        $sql= "UPDATE employees SET active=1 WHERE id=$id";
        header("Location:employee-trash.php");
    }
    mysqli_query($conn, $sql);

};

function employees_list($x){
    global $conn;
    if($x=="list"){
        $sql = "SELECT employees.* , departments.name AS departmentName FROM employees , departments WHERE departments.id = employees.department_id AND employees.active=1";
    }elseif($x=="trash"){
        $sql = "SELECT employees.* , departments.name AS departmentName FROM employees , departments WHERE departments.id = employees.department_id AND employees.active=0";

    }
    $data = mysqli_query($conn, $sql);
    return $data;
 };

function employees_new($name,$phone,$address,$email,$dID,$bsalary){
    global $conn;
    $sql = "INSERT INTO employees (name ,phone ,address ,email ,department_id ,basic_salary) VALUES ('$name', '$phone', '$address', '$email','$dID','$bsalary')";
    mysqli_query($conn, $sql);
    header("Location:../employee-list/employee-list.php");
};










?>