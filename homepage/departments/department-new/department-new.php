<?php
if (isset($_POST["dName"])) {
    $name = $_POST['dName'];
    $conn = mysqli_connect('localhost', 'root', '', '3arabity');
    $sql = "INSERT INTO departments (name) VALUES ('$name')";
    mysqli_query($conn, $sql);
    header("Location:../departments-list/departments-list.php");
}


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>New Department</title>
    <link rel="stylesheet" href="../../../css/design.css">
</head>

<body>
    <nav class="navbar"><span>3arabity.com</span>
        <a href="../../homepage/homepage.php"><button>Home Page</button></a>
    </nav>
    <div class="form-contaner">
        <div class="form-header">
            <h1 class="ma">New Department</h1>
        </div>
        <div class="form-main">
            <form method="post" action="department-new.php">
                <input type="text" placeholder="Enter Department Name" name="dName" required>
                <button type="submit" name="save_bt">save</button>
                <button><a herf="#">back</a></button>
            </form>
        </div>
    </div>
</body>

</html>