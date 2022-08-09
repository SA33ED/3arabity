<?php
$conn = mysqli_connect('localhost', 'root', '', '3arabity');
$sql = "SELECT * FROM departments";
$data = mysqli_query($conn, $sql);


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Departments</title>
    <link rel="stylesheet" href="../../../css/design.css">
</head>

<body>
    <nav class="navbar"><span>3arabity.com</span>
        <a href="../../homepage/homepage.php"><button>Home Page</button></a>
        <a href="../department-new/department-new.php"><button>ADD NEW DEPARTMENT</button></a>
    </nav>
    <a href="../department-new/department-new.php"><button>ADD NEW DEPARTMENT</button></a>

    <h1>"Departments List"</h1>
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
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["name"]; ?></td>
                        <td>
                            <a href="../department-edit/department-edit.php?id=<?php echo $row["id"]; ?>">
                                <button id="edit">Edit</button>
                            </a>
                            <a href="department-delete.php?id=<?php echo $row["id"]; ?>">
                                <button id="del">Delete</button>
                            </a>

                        </td>
                    </tr>


                <?php } ?>

            </tbody>
    </table>
</body>

</html>