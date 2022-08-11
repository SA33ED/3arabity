<?php
if (isset($_POST["modelID"])) {
    $conn = mysqli_connect('localhost', 'root', '', '3arabity');
    $id = $_POST['modelID'];
    $name = $_POST['modelName'];
    $bid = $_POST['brandID'];
    $sql = "UPDATE models SET name='$name' , brand_id='$bid' WHERE id='$id'";
    mysqli_query($conn, $sql);
    header('Location:../model-list/model-list.php');
}
$id = $_GET["id"];
$conn = mysqli_connect('localhost', 'root', '', '3arabity');
$sql = "SELECT * FROM models WHERE id='$id'";
$data = mysqli_query($conn, $sql);
$model = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Edit Model</title>
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
            <h1>Edit Model</h1>
        </div>
        <div class="form-main">
            <form method="post" action="model-edit.php">
                <input type="text" placeholder="ID" name="modelID" value="<?php echo $model['id']; ?>" required>
                <input type="text" placeholder="Enter Model" name="modelName" value="<?php echo $model['name']; ?>" required>
                <input type="text" placeholder="Enter Brand ID" name="brandID" value="<?php echo $model['brand_id']; ?>" required>
                <button type="submit" name="save_bt">save</button>
                <button><a herf="#">back</a></button>
            </form>
        </div>
    </div>
</body>

</html>