<?php
include "../../../basic.php";
if (isset($_GET['id'])) {
  customers_delete($_GET['id'],"restore");
}
$data=customers_list("trash");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Customers</title>
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
  <h1>"Customers trash"</h1>
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Email</th>
        <th>Birth date</th>
        <th>City</th>
        <th>National ID</th>
        <th>Actions</th>
      </tr>
      <thead>
      <tbody>

        <?php while ($customer = mysqli_fetch_assoc($data)) { ?>
          <tr>
            <td><?php echo $customer["name"]; ?> </td>
            <td><?php echo $customer["phone"]; ?></td>
            <td><?php echo $customer["address"]; ?></td>
            <td><?php echo $customer["email"]; ?></td>
            <td><?php echo $customer["bdate"]; ?></td>
            <td><?php echo $customer["cityname"]; ?></td>
            <td><?php echo $customer["id_number"]; ?></td>
            <td>

              <a href="customers-trash.php?id=<?php echo $customer["id"]; ?>">
                <button id="del">Restore</button>
              </a>

            </td>
          </tr>
        <?php  } ?>
      </tbody>

  </table>
</body>

</html>
