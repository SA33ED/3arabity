<?php
if (isset($_POST["dID"])) {
    $id = $_POST['dID'];
    $name = $_POST['dName'];
    $conn = mysqli_connect('localhost', 'root', '', '3arabity');
    $sql = "UPDATE departments SET name='$name' WHERE id='$id'";
    mysqli_query($conn, $sql);
    header("Location:../departments-list/departments-list.php");
}
$id = $_GET['id'];
$conn = mysqli_connect('localhost', 'root', '', '3arabity');
$sql = "SELECT * FROM departments WHERE id='$id'";
$data = mysqli_query($conn, $sql);
$department = mysqli_fetch_assoc($data);
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Edit Department</title>
    <link rel="stylesheet" href="../../../css/design.css">
</head>

<body>
    <nav class="navbar"><span>3arabity.com</span>
        <a href="../../homepage/homepage.php"><button>Home Page</button></a>
    </nav>
    <div class="form-contaner">
        <div class="form-header">
            <h1>Edit Department</h1>
        </div>
        <div class="form-main">
            <form method="post" action="department-edit.php">
                <input type="text" placeholder="ID" name="dID" value="<?php echo $department['id']; ?>" required> <!-- dID=>Department ID -->
                <input type="text" placeholder="Enter Department Name" name="dName" value="<?php echo $department['name']; ?>" required>
                <button type="submit" name="save_bt">save</button>
                <button><a herf="#">back</a></button>
            </form>
        </div>
    </div>
</body>

</html>