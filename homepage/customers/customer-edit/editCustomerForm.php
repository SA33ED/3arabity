<?php
include "../../../basic.php";
if (isset($_POST['cID'])) {
  customers_update($_POST["cID"],$_POST["cName"],$_POST["cPhone"],$_POST["cAddress"],$_POST["cEmail"],$_POST["cBdate"],$_POST["cityID"],$_POST["cNI"]);
}
$customer=customers_edit($_GET["id"]);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Edit Customer</title>
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
      <h1>Edit Customer</h1><br>
      <h2>--------------------</h2>
    </div>
    <div class="form-main">
      <form method="post" action="editCustomerForm.php">
        <input type="text" placeholder="Customer ID" name="cID" value="<?php echo $customer['id'] ?>" required>
        <input type="text" placeholder="New Name" name="cName" value="<?php echo $customer['name'] ?>" required>
        <input type="text" placeholder="New Phone" name="cPhone" value="<?php echo $customer['phone'] ?>" required>
        <input type="text" placeholder="New Address" name="cAddress" value="<?php echo $customer['address'] ?>" required>
        <input type="text" placeholder="New Email" name="cEmail" value="<?php echo $customer['email'] ?>" required>
        <input type="date" placeholder="New Birth Date" name="cBdate" value="<?php echo $customer['bdate'] ?>" required>
        <input type="text" placeholder="National ID" name="cNI" value="<?php echo $customer['id_number'] ?>" required>
        <input type="text" placeholder="New City ID" name="cityID" value="<?php echo $customer['city_id'] ?>" required>


        <button type="submit" name="save_bt">save</button>
        <button type="button" name="back_bt">back</button>
      </form>
    </div>
  </div>

</body>

</html>
