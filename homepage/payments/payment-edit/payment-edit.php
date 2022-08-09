<?php

$id = $_GET["id"];
$conn = mysqli_connect('localhost', 'root', '', '3arabity');
$sql = "SELECT * FROM payment_methods WHERE id='$id'";
$data = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($data);


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Edit Payment Method</title>
    <link rel="stylesheet" href="../../../css/design.css">
</head>

<body>
    <nav class="navbar"><span>3arabity.com</span>
        <a href="../../homepage/homepage.php"><button>Home Page</button></a>
    </nav>
    <div class="form-contaner">
        <div class="form-header">
            <h1>Edit Payment Method</h1>
        </div>
        <div class="form-main">
            <form method="post" action="pay-update.php">
                <input type="text" placeholder="ID" name="pmID" value="<?php echo $row['id']; ?>" required>
                <input type="text" placeholder="Enter Payment Method" name="pmName" value="<?php echo $row['name']; ?>" required>
                <button type="submit" name="save_bt">save</button>
                <button><a herf="#">back</a></button>
            </form>
        </div>
    </div>
</body>

</html>