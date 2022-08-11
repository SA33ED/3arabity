<?php
if (isset($_GET['id'])) {
    $id = $_GET["id"];
    $conn = mysqli_connect('localhost', 'root', '', '3arabity');
    $sql = "DELETE FROM colors WHERE id='$id'";
    mysqli_query($conn, $sql);
    header("Location:color-list.php");
}
$conn = mysqli_connect('localhost', 'root', '', '3arabity');
$sql = "SELECT * FROM colors";
$data = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Colors</title>
    <link rel="stylesheet" href="../../../css/design.css">
</head>

<body>
    <nav class="navbar"><span>3arabity.com</span>
        <a href="../color-new/color-new.php"><button>ADD NEW COLOR</button></a>
        <a href="../../homepage/homepage.php"><button>Home Page</button></a>
    </nav>
    <h1>"colors List"</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
            <thead>
            <tbody>
                <?php
                while ($colors = mysqli_fetch_assoc($data)) { ?>
                    <tr>
                        <td><?php echo $colors['id']; ?></td>
                        <td><?php echo $colors['name']; ?></td>
                        <td>
                            <a href="../color-edit/color-edit.php?id=<?php echo $colors["id"]; ?>">
                                <button id="edit">Edit</button>
                            </a>
                            <a href="color-list.php?id=<?php echo $colors["id"]; ?>">
                                <button id="del">Delete</button>
                            </a>
                        </td>
                    </tr>


                <?php } ?>





            </tbody>
    </table>
</body>

</html>