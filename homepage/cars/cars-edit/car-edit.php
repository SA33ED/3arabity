<?php
if (isset($_POST["carID"])) {
    $id = $_POST['carID'];
    $model_id = $_POST['model_id'];
    $color_id = $_POST['color_id'];
    $plate_number = $_POST['plate_number'];
    $year_id = $_POST['year_id'];
    $price_per_hour = $_POST['p_p_h'];
    $conn = mysqli_connect('localhost', 'root', '', '3arabity');
    $sql = "UPDATE cars SET model_id='$model_id' , color_id='$color_id' , price_per_hour='$price_per_hour' , plate_number='$plate_number' , year_id='$year_id' WHERE id='$id'";
    mysqli_query($conn, $sql);
    header("Location:../cars-list/car-list");
}
$id = $_GET["id"];
$conn = mysqli_connect('localhost', 'root', '', '3arabity');
$sql = "SELECT * FROM cars WHERE id='$id'";
$data = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($data);


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Edit Car</title>
    <link rel="stylesheet" href="../../../css/design.css">
</head>

<body>
    <nav class="navbar"><span>3arabity.com</span>

        <a href="../../homepage/homepage.php"><button>Home Page</button></a>
    </nav>
    <div class="form-contaner">
        <div class="form-header">
            <h1>Edit Car</h1>
        </div>
        <div class="form-main">
            <form method="post" action="car-edit.php">
                <input type="text" placeholder="ID" name="carID" value="<?php echo $row['id']; ?>" required>
                <input type="text" placeholder="Enter Model ID" name="model_id" value="<?php echo $row['model_id']; ?>" required>
                <input type="text" placeholder="Enter Color ID" name="color_id" value="<?php echo $row['color_id']; ?>" required>
                <input type="text" placeholder="Enter Plate Number" name="plate_number" value="<?php echo $row['plate_number']; ?>" required>
                <input type="text" placeholder="Enter Year ID" name="year_id" value="<?php echo $row['year_id']; ?>" required>
                <input type="text" placeholder="Price Per Hour" name="p_p_h" value="<?php echo $row['price_per_hour']; ?>" required>
                <button type="submit" name="save_bt">save</button>
                <button><a herf="#">back</a></button>
            </form>
        </div>
    </div>
</body>

</html>