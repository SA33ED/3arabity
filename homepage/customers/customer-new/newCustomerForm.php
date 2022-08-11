<?php
if (isset($_POST['cName'])) {
  $conn = mysqli_connect('localhost', 'root', '', '3arabity');
  $name = $_POST["cName"];
  $ni = $_POST["cNI"];
  $phone = $_POST["cPhone"];
  $address = $_POST["cAddress"];
  $email = $_POST["cEmail"];
  $bdate = $_POST["cBdate"];
  $city = $_POST["city_id"];
  $sql = "INSERT INTO customers (name , id_number , phone , address , email , bdate , city_id) VALUES ('$name' ,'$ni','$phone','$address','$email','$bdate','$city')";
  mysqli_query($conn, $sql);
  header("Location:../customers-list/customersList.php");
}
$conn = mysqli_connect('localhost', 'root', '', '3arabity');
$sql = "SELECT * FROM cities";
$data1 = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>New Customer</title>
  <link rel="stylesheet" href="../../../css/design.css">
</head>

<body>
  <nav class="navbar"><span>3arabity.com</span>
    <button>ADD NEW CUSTOMER</button>
    <a href="../../homepage/homepage.php"><button>Home Page</button></a>
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