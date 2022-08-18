<?php
include "../../../basic.php";
if (isset($_POST["carID"])) {
  cars_update($_POST["carID"],$_POST['model_id'],$_POST['color_id'],$_POST['plate_number'],$_POST['year_id'],$_POST['p_p_h'],$_FILES["image"]);
}
$row=cars_edit($_GET["id"]);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Edit Car</title>
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
            <h1>Edit Car</h1>
        </div>
        <div class="form-main">
            <form method="post" action="car-edit.php" enctype="multipart/form-data">
                <input type="hidden" placeholder="ID" name="carID" value="<?php echo $row['id']; ?>" required>
                <img class="cars-logo" src="../../../img/cars/<?php echo $row["image"]; ?>">
                <input type="file" name="image"><br><br>
                <input type="text" placeholder="Enter Model ID" name="model_id" value="<?php echo $row['model_id']; ?>" required>
                <input type="text" placeholder="Enter Color ID" name="color_id" value="<?php echo $row['color_id']; ?>" required>
                <input type="text" placeholder="Enter Plate Number" name="plate_number" value="<?php echo $row['plate_number']; ?>" required>
                <input type="text" placeholder="Enter Year ID" name="year_id" value="<?php echo $row['year_id']; ?>" required>
                <input type="text" placeholder="Price Per Hour" name="p_p_h" value="<?php echo $row['price_per_hour']; ?>" required>
                <button type="submit" name="save_bt">save</button>
                <button><a herf="#">back</a></button>
            </form>
        </div>
    </div>
</body>

</html>
