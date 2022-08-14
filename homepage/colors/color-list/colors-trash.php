<?php
include "../../../basic.php";
if (isset($_GET['id'])) {
  colors_delete($_GET['id'],"restore");
}
$data=colors_list("trash");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Colors</title>
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

<h1>"colors Trash"</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
            <thead>
            <tbody>
                <?php
                while ($colors = mysqli_fetch_assoc($data)) { ?>
                    <tr>
                        <td><?php echo $colors['id']; ?></td>
                        <td><?php echo $colors['name']; ?></td>
                        <td>
                            <a href="colors-trash.php?id=<?php echo $colors["id"]; ?>">
                                <button id="del">Restore</button>
                            </a>

                        </td>
                    </tr>


                <?php } ?>





            </tbody>
    </table>
</body>

</html>
