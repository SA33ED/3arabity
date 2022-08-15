<?php
include "../../../basic.php";
if (isset($_GET['id'])) {
    models_delete($_GET["id"],"delete");
}
$data=models_list("list");
?>
<!--............................................-->
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Models</title>
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
    <!-- <nav class="navbar"><span>3arabity.com </span>

        <a href="../../homepage/homepage.php"><button>Home Page</button></a>

    </nav> -->
    <h1>"Models List"</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Brand ID</th>
                <th>Active</th>
            </tr>
            <thead>
            <tbody>
                <?php while ($model = mysqli_fetch_assoc($data)) { ?>
                    <tr>
                        <td><?php echo $model["id"]; ?></td>
                        <td><?php echo $model["name"]; ?></td>
                        <td><?php echo $model["brand_id"]; ?></td>
                        <td>

                            <a href="../model-edit/model-edit.php?id=<?php echo $model["id"]; ?>">
                                <button id="edit">Edit</button>
                            </a>
                            <a href="model-list.php?id=<?php echo $model["id"]; ?>">
                                <button id="del">Delete</button>
                            </a>
                            <a href="../model-new/model-new.php">
                                <button id="new">New Model</button>
                            </a>
                        </td>
                    </tr>
                <?php } ?>

            </tbody>
    </table>
</body>

</html>
