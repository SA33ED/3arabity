<?php
if (isset($_GET["id"])) {
    $id = $_GET['id'];
    $conn = mysqli_connect('localhost', 'root', '', '3arabity');
    $sql = "DELETE FROM cities WHERE id='$id'";
    mysqli_query($conn, $sql);
    header("Location:citiesList.php");
}
$conn = mysqli_connect('localhost', 'root', '', '3arabity');
$sql = "SELECT * FROM cities";
$data = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Cities</title>
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
    <!-- <nav class="navbar"><span>3arabity.com</span>

        <a href="../../homepage/homepage.php"><button>Home Page</button></a>
    </nav> -->
    <h1>"Cities List"</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
            <thead>
            <tbody>
                <?php while ($city = mysqli_fetch_assoc($data)) { ?>
                    <tr>
                        <td><?php echo $city["id"]; ?></td>
                        <td><?php echo $city["name"]; ?></td>
                        <td><a href="../city-edit/editCityForm?id=<?php echo $city["id"]; ?>"><button id="edit">Edit</button></a>
                            <a href="citiesList.php?id=<?php echo $city["id"]; ?>"><button id="del">delete</button></a>
                            <a href="../city-new/newCityForm.php"><button id="new">ADD NEW CITY</button></a>
                        </td>
                    </tr>
                <?php } ?>

            </tbody>
    </table>
</body>

</html>
