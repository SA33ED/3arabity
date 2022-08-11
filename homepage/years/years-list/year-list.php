<?php
if (isset($_GET['id'])) {
    $id = $_GET["id"];
    $conn = mysqli_connect('localhost', 'root', '', '3arabity');
    $sql = "DELETE FROM years WHERE id='$id'";
    mysqli_query($conn, $sql);
    header("Location:year-list.php");
}
$conn = mysqli_connect('localhost', 'root', '', '3arabity');
$sql = "SELECT * FROM years";
$data = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Year</title>
    <link rel="stylesheet" href="../../../css/design.css">
</head>

<body>
    <nav class="navbar"><span>3arabity.com</span>
        <a href="../year-new/year-new.php"><button>ADD NEW YEAR</button></a>
        <a href="../../homepage/homepage.php"><button>Home Page</button></a>
    </nav>
    <h1>"Years List"</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
            <thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($data)) { ?>

                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['name'] ?></td>
                        <td>
                            <a href="../year-edit/year-edit.php?id=<?php echo $row["id"]; ?>">
                                <button id="edit">Edit</button>
                            </a>
                            <a href="year-list.php?id=<?php echo $row["id"]; ?>">
                                <button id="del">Delete</button>
                            </a>
                        </td>
                    </tr>

                <?php } ?>



            </tbody>
    </table>
</body>

</html>