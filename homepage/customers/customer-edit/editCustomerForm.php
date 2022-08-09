<?php
$id = $_GET["id"];
$conn = mysqli_connect('localhost', 'root', '', '3arabity');
$sql = "SELECT * FROM customers WHERE id='$id'";
$data = mysqli_query($conn, $sql);
$customer = mysqli_fetch_assoc($data);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Edit Customer</title>
  <link rel="stylesheet" href="../../../css/design.css">
</head>

<body>
  <nav class="navbar"><span>3arabity.com</span>
    <a href="../../homepage/homepage.php"><button>Home Page</button></a>
  </nav>
  <div class="form-contaner">
    <div class="form-header">
      <h1>Edit Customer</h1><br>
      <h2>--------------------</h2>
    </div>
    <div class="form-main">
      <form method="post" action="customer-update.php">
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