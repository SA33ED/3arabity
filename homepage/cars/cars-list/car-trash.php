<?php
include "../../../basic.php";
if (isset($_GET["id"])) {
    cars_delete($_GET["id"],"restore");
}

$data=cars_list("trash");


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Cars</title>
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
    <h1>"Cars List"</h1>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Brand</th>
                <th>Model</th>
                <th>Color</th>
                <th>Plate Number</th>
                <th>Year</th>
                <th>Price Per Hour</th>
                <th>Actions</th>
            </tr>
            <thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($data)) { ?>
                    <tr>
                    <td><img class="carsimg" src="../../../img/cars/<?php echo $row["image"]; ?>"></td>
                        <td><?php echo $row['brandName']; ?></td>
                        <td><?php echo $row['modelName']; ?></td>
                        <td><?php echo $row['colorName']; ?></td>
                        <td><?php echo $row['plate_number']; ?></td>
                        <td><?php echo $row['yearName']; ?></td>
                        <td><?php echo $row['price_per_hour']; ?></td>

                        <td>
                            <a href="car-trash.php?id=<?php echo $row["id"]; ?>">
                                <button id="del">Restore</button>
                            </a>
                        </td>
                    </tr>
                <?php } ?>



            </tbody>
    </table>
</body>

</html>
