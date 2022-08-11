<?php
if (isset($_POST["model_id"])) {
    $model_id = $_POST['model_id'];
    $color_id = $_POST['color_id'];
    $plate_number = $_POST['plate_number'];
    $year_id = $_POST['year_id'];
    $price_per_hour = $_POST['p_p_h'];
    $conn = mysqli_connect('localhost', 'root', '', '3arabity');
    $sql = "INSERT INTO cars (model_id , color_id , plate_number , year_id , price_per_hour) VALUES ('$model_id', '$color_id', '$plate_number' , '$year_id' , '$price_per_hour')";
    mysqli_query($conn, $sql);
    header("Location:../cars-list/car-list.php");
}
$conn = mysqli_connect('localhost', 'root', '', '3arabity');
$sql = "SELECT * FROM models";
$sql1 = "SELECT * FROM colors";
$sql2 = "SELECT * FROM years";
$data1 = mysqli_query($conn, $sql);
$data2 = mysqli_query($conn, $sql1);
$data3 = mysqli_query($conn, $sql2);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>New Car</title>
    <link rel="stylesheet" href="../../../css/design.css">
</head>

<body>
    <nav class="navbar"><span>3arabity.com</span>
        <a href="../../homepage/homepage.php"><button>Home Page</button></a>
    </nav>
    <div class="form-contaner">
        <div class="form-header">
            <h1>New Car</h1>
        </div>
        <div class="form-main">
            <form method="post" action="cars-new.php">
                <select class="select1" name="model_id">
                    <?php while ($row = mysqli_fetch_assoc($data1)) { ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?>
                        <?php } ?>
                </select>
                <select class="select1" name="color_id">
                    <?php while ($row = mysqli_fetch_assoc($data2)) { ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?>
                        <?php } ?>
                </select>
                <input type="text" placeholder="Enter Plate Number" name="plate_number" required>
                <select class="select1" name="year_id">
                    <?php while ($row = mysqli_fetch_assoc($data3)) { ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?>
                        <?php } ?>
                </select>
                <input type="text" placeholder="Price Per Hour" name="p_p_h" required>
                <button type="submit" name="save_bt">save</button>
                <button><a herf="#">back</a></button>
            </form>
        </div>
    </div>
</body>

</html>