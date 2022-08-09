<?php
$conn = mysqli_connect('localhost', 'root', '', '3arabity');
$sql = "SELECT * FROM cars";
$data = mysqli_query($conn, $sql);


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Cars</title>
    <link rel="stylesheet" href="../../../css/design.css">
</head>

<body>
    <nav class="navbar"><span>3arabity.com</span>
        <a href="../cars-new/cars-new.php"><button>ADD NEW CAR</button></a>
        <a href="../../homepage/homepage.php"><button>Home Page</button></a>
    </nav>
    <h1>"Cars List"</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Model ID</th>
                <th>Color ID</th>
                <th>Plate Number</th>
                <th>Year ID</th>
                <th>Price Per Hour</th>
                <th>Actions</th>
            </tr>
            <thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($data)) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['model_id']; ?></td>
                        <td><?php echo $row['color_id']; ?></td>
                        <td><?php echo $row['plate_number']; ?></td>
                        <td><?php echo $row['year_id']; ?></td>
                        <td><?php echo $row['price_per_hour']; ?></td>

                        <td>
                            <a href="../cars-edit/car-edit.php?id=<?php echo $row["id"]; ?>">
                                <button id="edit">Edit</button>
                            </a>
                            <a href="car-delete.php?id=<?php echo $row["id"]; ?>">
                                <button id="del">Delete</button>
                            </a>
                        </td>
                    </tr>
                <?php } ?>



            </tbody>
    </table>
</body>

</html>