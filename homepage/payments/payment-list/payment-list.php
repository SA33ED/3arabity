<?php
include "../../../basic.php";
if (isset($_GET['id'])) {
    payments_delete($_GET["id"],"delete");
}
$data=payments_list("list");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Payments Methods</title>
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
    <a href="../payment-new/payment-new.php"><button>ADD NEW CAR</button></a>
    <a href="../../homepage/homepage.php"><button>Home Page</button></a>
    </nav>
    <br>
    <h1>"Payments Methods"</h1>
    <a href="../payment-new/payment-new.php"><button id="new">Add New Payment Method</button></a>
    <br>
    <br>
    <a href="payment-trash.php"><button id="new">Payment Methods Trash</button></a>
    <br>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
            <thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($data)) { ?>
                    <tr>
                        <td><?php echo $row["name"]; ?></td>
                        <td>
                            <a href="../payment-edit/payment-edit.php?id=<?php echo $row["id"]; ?>">
                                <button id="edit">Edit</button>
                            </a>
                            <a href="payment-list.php?id=<?php echo $row["id"]; ?>">
                                <button id="del">Delete</button>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
    </table>
</body>

</html>
