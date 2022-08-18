<?php
include "../../../basic.php";
if (isset($_POST["eID"])) {
    employees_update($_POST["eID"],$_POST["eName"],$_POST["ePhone"],$_POST["eAddress"],$_POST["eEmail"],$_POST["dID"],$_POST["bsalary"]);
}
$employee=employees_edit($_GET["id"]);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Edit Employee</title>
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
            <h1>Edit Employee</h1>
        </div>
        <div class="form-main">
            <form method="post" action="employee-edit.php">
                <input type="hidden" placeholder="Employee ID" name="eID" value="<?php echo $employee['id']; ?>" required>
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