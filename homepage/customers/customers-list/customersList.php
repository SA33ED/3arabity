<?php
$conn = mysqli_connect('localhost', 'root', '', '3arabity');
$sql = "SELECT * FROM customers";
$data = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Customers</title>
  <link rel="stylesheet" href="../../../css/design.css">
</head>

<body>
  <nav class="navbar"><span>3arabity.com</span>
    <a href="../customer-new/newCustomerForm.php"><button>ADD NEW CUSTOMER</button></a>
    <a href="../../homepage/homepage.php"><button>Home Page</button></a>
  </nav>
  <h1>"Customers List"</h1>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Email</th>
        <th>Birth date</th>
        <th>City ID</th>
        <th>National ID</th>
        <th>Actions</th>
      </tr>
      <thead>
      <tbody>

        <?php while ($customer = mysqli_fetch_assoc($data)) { ?>
          <tr>
            <td><?php echo $customer["id"]; ?> </td>
            <td><?php echo $customer["name"]; ?> </td>
            <td><?php echo $customer["phone"]; ?></td>
            <td><?php echo $customer["address"]; ?></td>
            <td><?php echo $customer["email"]; ?></td>
            <td><?php echo $customer["bdate"]; ?></td>
            <td><?php echo $customer["city_id"]; ?></td>
            <td><?php echo $customer["id_number"]; ?></td>
            <td>
              <a href="../customer-edit/editCustomerForm.php?id=<?php echo $customer["id"]; ?>">
                <button id="edit">Edit</button>
              </a>
              <a href="customer-delete.php?id=<?php echo $customer["id"]; ?>">
                <button id="del">Delete</button>
              </a>

            </td>
          </tr>
        <?php  } ?>
      </tbody>

  </table>
</body>

</html>