<?php
if (isset($_GET['id'])) {
    $id = $_GET["id"];
    $conn = mysqli_connect('localhost', 'root', '', '3arabity');
    $sql = "DELETE FROM models WHERE id='$id'";
    mysqli_query($conn, $sql);
    header("Location:model-list.php");
}
$conn = mysqli_connect('localhost', 'root', '', '3arabity');
$sql = "SELECT * FROM models";
$data = mysqli_query($conn, $sql);
?>
<!--............................................-->
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Models</title>
    <link rel="stylesheet" href="../../../css/design.css">
</head>

<body>
    <nav class="navbar"><span>3arabity.com </span>
        <a href="../model-new/model-new.php">
            <button>ADD NEW MODEL</button>
        </a>
        <a href="../../homepage/homepage.php"><button>Home Page</button></a>

    </nav>
    <h1>"Models List"</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Brand ID</th>
                <th>Active</th>
            </tr>
            <thead>
            <tbody>
                <?php while ($model = mysqli_fetch_assoc($data)) { ?>
                    <tr>
                        <td><?php echo $model["id"]; ?></td>
                        <td><?php echo $model["name"]; ?></td>
                        <td><?php echo $model["brand_id"]; ?></td>
                        <td>

                            <a href="../model-edit/model-edit.php?id=<?php echo $model["id"]; ?>">
                                <button id="edit">Edit</button>
                            </a>
                            <a href="model-list.php?id=<?php echo $model["id"]; ?>">
                                <button id="del">Delete</button>
                            </a>
                        </td>
                    </tr>
                <?php } ?>

            </tbody>
    </table>
</body>

</html>