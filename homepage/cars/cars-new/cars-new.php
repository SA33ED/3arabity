<?php
include "../../../basic.php";
if (isset($_POST["model_id"])) {
  cars_new($_POST['model_id'],$_POST['color_id'],$_POST['plate_number'],$_POST['year_id'],$_POST['p_p_h']);    
}
$conn = mysqli_connect('localhost', 'root', '', '3arabity');
$sql = "SELECT * FROM models";
$sql1 = "SELECT * FROM colors";
$sql2 = "SELECT * FROM years";
$data1 = mysqli_query($conn, $sql);
$data2 = mysqli_query($conn, $sql1);
$data3 = mysqli_query($conn, $sql2);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>New Car</title>
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
            <h1>New Car</h1>
        </div>
        <div class="form-main">
            <form method="post" action="cars-new.php">
                <select class="select1" name="model_id">
                    <?php while ($row = mysqli_fetch_assoc($data1)) { ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?>
                        <?php } ?>
                </select>
                <select class="select1" name="color_id">
                    <?php while ($row = mysqli_fetch_assoc($data2)) { ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?>
                        <?php } ?>
                </select>
                <input type="text" placeholder="Enter Plate Number" name="plate_number" required>
                <select class="select1" name="year_id">
                    <?php while ($row = mysqli_fetch_assoc($data3)) { ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?>
                        <?php } ?>
                </select>
                <input type="text" placeholder="Price Per Hour" name="p_p_h" required>
                <button type="submit" name="save_bt">save</button>
                <button><a herf="#">back</a></button>
            </form>
        </div>
    </div>
</body>

</html>
