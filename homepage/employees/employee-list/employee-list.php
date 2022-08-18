<?php
include "../../../basic.php";
if (isset($_GET['id'])) {
    employees_delete($_GET['id'],"delete");
}

$data=employees_list("list");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Employees</title>
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
    <h1>"Employees List"</h1>
    <a href="../employee-new/employee-new.php"><button id="new">New Employee</button></a>
    <br>
    <br>
    <a href="employee-trash.php"><button id="new">Employees Trash</button></a>
    <br>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Email</th>
                <th>Department ID</th>
                <th>Basic Salary</th>
                <th>Actions</th>
            </tr>
            <thead>
            <tbody>
                <?php while ($employee = mysqli_fetch_assoc($data)) { ?>

                    <tr>
                        <td><?php echo $employee["id"]; ?> </td>
                        <td><?php echo $employee["name"]; ?> </td>
                        <td><?php echo $employee["phone"]; ?></td>
                        <td><?php echo $employee["address"]; ?></td>
                        <td><?php echo $employee["email"]; ?></td>
                        <td><?php echo $employee["departmentName"]; ?></td>
                        <td><?php echo $employee["basic_salary"]; ?></td>
                        <td><a href="../employee-edit/employee-edit.php?id=<?php echo $employee["id"]; ?>">
                                <button id="edit">Edit</button>
                            </a>
                            <a href="employee-list.php?id=<?php echo $employee["id"]; ?>">
                                <button id="del">Delete</button>
                            </a>
                            

                        </td>
                    </tr>

                <?php } ?>



            </tbody>
    </table>
</body>

</html>
