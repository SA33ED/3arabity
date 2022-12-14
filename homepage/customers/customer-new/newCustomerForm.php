<?php
include "../../../basic.php";
if (isset($_POST['cName'])) {
  customers_new($_POST["cName"],$_POST["cNI"],$_POST["cPhone"],$_POST["cAddress"],$_POST["cEmail"],$_POST["cBdate"],$_POST["city_id"]);
}
$data1=cities_list("active");?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>New Customer</title>
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
      <h1>New Customer</h1><br>
      <h2>--------------------</h2>
    </div>
    <div class="form-main">
      <form method="post" action="newCustomerForm.php">
        <input type="text" placeholder="Name" name="cName" required>
        <input type="text" placeholder="Phone" name="cPhone" required>
        <input type="text" placeholder="Address" name="cAddress" required>
        <input type="text" placeholder="Email" name="cEmail" required>
        <input type="date" placeholder="Birth Date" name="cBdate" required>

        <select class="select1" name="city_id">
          <?php while ($row = mysqli_fetch_assoc($data1)) { ?>
            <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?>
            <?php } ?>
        </select>

        <input type="text" placeholder="National ID" name="cNI" required>
        <button type="submit" name="save_bt">save</button>
        <button type="button" name="back_bt">back</button>
      </form>
    </div>
  </div>
</body>

</html>
