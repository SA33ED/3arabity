<?php
$id = $_GET["id"];
$conn = mysqli_connect('localhost', 'root', '', '3arabity');
$sql = "SELECT * FROM brands WHERE id='$id'";
$data = mysqli_query($conn, $sql);
$brand = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Edit Brand</title>
    <link rel="stylesheet" href="../../../css/design.css">
</head>

<body>
    <nav class="navbar"><span>3arabity.com</span>
        <button>Edit brand</button>
        <a href="../../homepage/homepage.php"><button>Home Page</button></a>
    </nav>

    <div class="form-contaner">
        <div class="form-header">
            <h1>Edit Brand</h1>
        </div>
        <div class="form-main">
            <form method="post" action="brand-update.php">
                <input type="text" placeholder="ID" name="brandID" value="<?php echo $brand['id']; ?>" required>
                <input type="text" placeholder="Enter Brand" name="nbrandName" value="<?php echo $brand['name']; ?>" required>
                <button type="submit" name="save_bt">save</button>
                <button><a herf="#">back</a></button>
            </form>
        </div>
    </div>
</body>

</html>