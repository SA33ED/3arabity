<?php
include "../../../basic.php";
if (isset($_GET["id"])) {
    brands_delete($_GET["id"],"delete");
}
$data=brands_list();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Brands</title>
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
    <br>
    <h1>"Brands List"</h1>
    <a href="../brand-new/brand-new.php"><button id="new">Add New Brand</button></a>
    <br>
        <br>
    <a href="brand-trash.php"><button id="new">Brands Trash</button></a>
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
                <?php
                while ($brands = mysqli_fetch_assoc($data)) { ?>
                    <tr>
                        <td>
                            <?php echo $brands["name"]; ?>
                        </td>
                        <td>
                            <a href="../brand-edit/brand-edit.php?id=<?php echo $brands["id"]; ?>">
                                <button id="edit">Edit</button>
                            </a>
                            <a href="brand-list.php?id=<?php echo $brands["id"]; ?>">
                                <button id="del">Delete</button>
                            </a>

                        </td>
                    </tr>
                <?php } ?>
            </tbody>
    </table>
</body>

</html>
