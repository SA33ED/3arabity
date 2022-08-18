<?php
include "../../../basic.php";
if (isset($_POST["ID"])) {
  cities_update($_POST["ID"],$_POST["cityName"]);
}
$city=cities_edit($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Edit City</title>
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
      <h1>Edit City</h1>
    </div>
    <div class="form-main">
      <form method="post" action="editCityForm.php">
        <input type="hidden" placeholder="ID" value="<?php echo $city["id"]; ?>" name="ID" required>
        <input type="text" placeholder="Enter New City Name" value="<?php echo $city["name"]; ?>" name="cityName" required>
        <button type="submit" name="save_bt">save</button>
        <button><a herf="#">back</a></button>
      </form>
    </div>
  </div>
