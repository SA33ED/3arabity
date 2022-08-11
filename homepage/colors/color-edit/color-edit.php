<?php
if (isset($_POST["colorID"])) {
    $id = $_POST["colorID"];
    $name = $_POST["colorName"];
    $conn = mysqli_connect('localhost', 'root', '', '3arabity');
    $sql = "UPDATE colors SET name='$name' WHERE id='$id'";
    mysqli_query($conn, $sql);
    header("Location:../color-list/color-list.php");
}

$id = $_GET["id"];
$conn = mysqli_connect('localhost', 'root', '', '3arabity');
$sql = "SELECT * FROM colors WHERE id='$id'";
$data = mysqli_query($conn, $sql);
$color = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Edit Color</title>
    <link rel="stylesheet" href="../../../css/design.css">
</head>

<body>
    <nav class="navbar"><span>3arabity.com</span>
        <a href="../../homepage/homepage.php"><button>Home Page</button></a>
    </nav>
    <div class="form-contaner">
        <div class="form-header">
            <h1>Edit Color</h1>
        </div>
        <div class="form-main">
            <form method="post" action="color-edit.php" ;>
                <input type="text" placeholder="ID" name="colorID" value="<?php echo $color['id']; ?>" required>
                <input type="text" placeholder="Enter Color" name="colorName" value="<?php echo $color['name']; ?>" required>
                <button type="submit" name="save_bt">save</button>
                <button><a herf="#">back</a></button>
            </form>
        </div>
    </div>
</body>

</html>