<?php
$conn = mysqli_connect('localhost', 'root', '', '3arabity');
$sql = "SELECT * FROM brands";
$data = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Brands</title>
    <link rel="stylesheet" href="../../../css/design.css">
</head>

<body>
    <nav class="navbar"><span>3arabity.com</span>
        <a href="../brand-new/brand-new.php"><button>ADD NEW BRAND</button></a>
        <a href="../../homepage/homepage.php"><button>Home Page</button></a>
    </nav>
    <h1>"Brands List"</h1>
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
                while ($brands = mysqli_fetch_assoc($data)) { ?>
                    <tr>
                        <td>
                            <?php echo $brands["id"]; ?>
                        </td>
                        <td>
                            <?php echo $brands["name"]; ?>
                        </td>
                        <td>
                            <a href="../brand-edit/brand-edit.php?id=<?php echo $brands["id"]; ?>">
                                <button id="edit">Edit</button>
                            </a>
                            <a href="brand-delete.php?id=<?php echo $brands["id"]; ?>">
                                <button id="del">Delete</button>
                            </a>

                        </td>
                    </tr>
                <?php } ?>
            </tbody>
    </table>
</body>

</html>