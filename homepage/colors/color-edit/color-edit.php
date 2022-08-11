<?php
if (isset($_POST["colorID"])) {
    $id = $_POST["colorID"];
    $name = $_POST["colorName"];
    $conn = mysqli_connect('localhost', 'root', '', '3arabity');
    $sql = "UPDATE colors SET name='$name' WHERE id='$id'";
    mysqli_query($conn, $sql);
    header("Location:../color-list/color-list.php");
}

$id = $_GET["id"];
$conn = mysqli_connect('localhost', 'root', '', '3arabity');
$sql = "SELECT * FROM colors WHERE id='$id'";
$data = mysqli_query($conn, $sql);
$color = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Edit Color</title>
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
            <h1>Edit Color</h1>
        </div>
        <div class="form-main">
            <form method="post" action="color-edit.php" ;>
                <input type="text" placeholder="ID" name="colorID" value="<?php echo $color['id']; ?>" required>
                <input type="text" placeholder="Enter Color" name="colorName" value="<?php echo $color['name']; ?>" required>
                <button type="submit" name="save_bt">save</button>
                <button><a herf="#">back</a></button>
            </form>
        </div>
    </div>
</body>

</html>