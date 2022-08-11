<?php
if (isset($_POST["yearID"])) {
    $id = $_POST['yearID'];
    $name = $_POST['yearName'];
    $conn = mysqli_connect('localhost', 'root', '', '3arabity');
    $sql = "UPDATE years SET name='$name' WHERE id='$id'";
    mysqli_query($conn, $sql);
    header("Location:../years-list/year-list.php");
}
$id = $_GET["id"];
$conn = mysqli_connect('localhost', 'root', '', '3arabity');
$sql = "SELECT * FROM years WHERE id='$id'";
$data = mysqli_query($conn, $sql);
$year = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Edit Year</title>
    <link rel="stylesheet" href="../../../css/design.css">
</head>

<body>
    <nav class="navbar"><span>3arabity.com</span>
        <a href="../../homepage/homepage.php"><button>Home Page</button></a>
    </nav>
    <div class="form-contaner">
        <div class="form-header">
            <h1>Edit Year</h1>
        </div>
        <div class="form-main">
            <form method="post" action="year-edit.php">
                <input type="text" placeholder="ID" name="yearID" value="<?php echo $year['id']; ?>" required>
                <input type="text" placeholder="Enter year" name="yearName" value="<?php echo $year['name']; ?>" required>
                <button type="submit" name="save_bt">save</button>
                <button><a herf="#">back</a></button>
            </form>
        </div>
    </div>
</body>

</html>