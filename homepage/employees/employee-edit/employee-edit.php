<?php
if (isset($_POST["eID"])) {
    $id = $_POST["eID"];
    $name = $_POST["eName"];
    $phone = $_POST["ePhone"];
    $address = $_POST["eAddress"];
    $email = $_POST["eEmail"];
    $dID = $_POST["dID"];
    $bsalary = $_POST["bsalary"];
    $conn = mysqli_connect('localhost', 'root', '', '3arabity');
    $sql = "UPDATE employees
    SET name = '$name' , phone = '$phone' , address = '$address' , email ='$email' , department_id='$dID' , basic_salary='$bsalary'
    WHERE id ='$id';";
    mysqli_query($conn, $sql);
    header("Location:../employee-list/employee-list.php");
}
$id = $_GET["id"];
$conn = mysqli_connect('localhost', 'root', '', '3arabity');
$sql = "SELECT * FROM employees WHERE id='$id'";
$data = mysqli_query($conn, $sql);
$employee = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Edit Employee</title>
    <link rel="stylesheet" href="../../../css/design.css">
</head>

<body>
    <nav class="navbar"><span>3arabity.com</span>
        <a href="../../homepage/homepage.php"><button>Home Page</button></a>
    </nav>
    <div class="form-contaner">
        <div class="form-header">
            <h1>Edit Employee</h1>
        </div>
        <div class="form-main">
            <form method="post" action="employee-edit.php">
                <input type="text" placeholder="Employee ID" name="eID" value="<?php echo $employee['id']; ?>" required>
                <input type="text" placeholder="New Name" name="eName" value="<?php echo $employee['name']; ?>" required>
                <input type="text" placeholder="New Phone" name="ePhone" value="<?php echo $employee['phone']; ?>" required>
                <input type="text" placeholder="New Address" name="eAddress" value="<?php echo $employee['address']; ?>" required>
                <input type="text" placeholder="New Email" name="eEmail" value="<?php echo $employee['email']; ?>" required>
                <input type="text" placeholder="Department ID" name="dID" value="<?php echo $employee['department_id']; ?>" required>
                <input type="text" placeholder="Basic Salary" name="bsalary" value="<?php echo $employee['basic_salary']; ?>" required>
                <button type="submit" name="save_bt">save</button>
                <button><a herf="#">back</a></button>
            </form>
        </div>
    </div>
</body>

</html>