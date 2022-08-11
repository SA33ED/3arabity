<?php
if (isset($_POST["colorName"])) {
    $name = $_POST["colorName"];
    $conn = mysqli_connect('localhost', 'root', '', '3arabity');
    $sql = "INSERT INTO colors (name) VALUES ('$name')";
    mysqli_query($conn, $sql);
    header("Location:../color-list/color-list.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>New color</title>
    <link rel="stylesheet" href="../../../css/design.css">
</head>

<body>
    <nav class="navbar"><span>3arabity.com</span>
        <a href="../../homepage/homepage.php"><button>Home Page</button></a>
    </nav>
    <div class="form-contaner">
        <div class="form-header">
            <h1>New color</h1>
        </div>
        <div class="form-main">
            <form method="post" action="color-new.php">
                <input type="text" placeholder="Enter color" name="colorName" required>
                <button type="submit" name="save_bt">save</button>
                <button><a herf="#">back</a></button>
            </form>
        </div>
    </div>
</body>

</html>