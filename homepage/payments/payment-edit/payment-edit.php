<?php
if (isset($_POST["pmID"])) {
    $id = $_POST["pmID"];
    $name = $_POST["pmName"];
    $conn = mysqli_connect('localhost', 'root', '', '3arabity');
    $sql = "UPDATE payment_methods SET name='$name' WHERE id='$id'";
    mysqli_query($conn, $sql);
    header("Location:../payment-list/payment-list.php");
}

$id = $_GET["id"];
$conn = mysqli_connect('localhost', 'root', '', '3arabity');
$sql = "SELECT * FROM payment_methods WHERE id='$id'";
$data = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($data);


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Edit Payment Method</title>
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
            <h1>Edit Payment Method</h1>
        </div>
        <div class="form-main">
            <form method="post" action="payment-edit.php">
                <input type="text" placeholder="ID" name="pmID" value="<?php echo $row['id']; ?>" required>
                <input type="text" placeholder="Enter Payment Method" name="pmName" value="<?php echo $row['name']; ?>" required>
                <button type="submit" name="save_bt">save</button>
                <button><a herf="#">back</a></button>
            </form>
        </div>
    </div>
</body>

</html>