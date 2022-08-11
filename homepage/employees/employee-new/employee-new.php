<?php
if (isset($_POST["eName"])) {
    $name = $_POST["eName"];
    $phone = $_POST["ePhone"];
    $address = $_POST["eAddress"];
    $email = $_POST["eEmail"];
    $dID = $_POST["dID"];
    $bsalary = $_POST["bsalary"];
    $conn = mysqli_connect('localhost', 'root', '', '3arabity');
    $sql = "INSERT INTO employees (name ,phone ,address ,email ,department_id ,basic_salary) VALUES ('$name', '$phone', '$address', '$email','$dID','$bsalary')";
    mysqli_query($conn, $sql);
    header("Location:../employee-list/employee-list.php");
}
$conn = mysqli_connect('localhost', 'root', '', '3arabity');
$sql = "SELECT * FROM departments";
$data1 = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>New Employee</title>
    <link rel="stylesheet" href="../../../css/design.css">
</head>

<body>
    <nav class="navbar">
        <span>3arabity.com |</span>
        <a href="../../customers/customers-list/customersList.php"><button>Customers</button></a>
        <a href="../../employees/employee-list/employee-list.php"><button>Employees</button></a>
        <a href="../../cities/cities-list/citiesList.php"><button>Cities</button></a>
        <a href="../../departments/departments-list/departments-list.php"><button>Departments</button></a>
        <a href="../../cars/cars-list/car-list.php"><button>Cars</button></a>
        <a href="../../brands/brand-list/brand-list.php"><button>Brands</button></a>
        <a href="../../models/model-list/model-list.php"><button>Models</button></a>
        <a href="../../colors/color-list/color-list.php"><button>Colors</button></a>
        <a href="../../years/years-list/year-list.php"><button>Years</button></a>
        <a href="../../payments/payment-list/payment-list.php"><button>Payments</button></a>
    </nav>
    <div class="form-contaner">
        <div class="form-header">
            <h1>New Employee</h1>
        </div>
        <div class="form-main">
            <form method="post" action="employee-new.php">
                <input type="text" placeholder="New Name" name="eName" required>
                <input type="text" placeholder="New Phone" name="ePhone" required>
                <input type="text" placeholder="New Address" name="eAddress" required>
                <input type="text" placeholder="New Email" name="eEmail" required>
                <select class="select1" name="dID">
                    <?php while ($row = mysqli_fetch_assoc($data1)) { ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?>
                        <?php } ?>
                </select>
                <input type="text" placeholder="Basic Salary" name="bsalary" required>
                <button type="submit" name="save_bt">save</button>
                <button><a herf="#">back</a></button>
            </form>
        </div>
    </div>
</body>

</html>