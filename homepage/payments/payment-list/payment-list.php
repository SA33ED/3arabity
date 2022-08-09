<?php
$conn = mysqli_connect('localhost', 'root', '', '3arabity');
$sql = "SELECT * FROM payment_methods";
$data = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Payments Methods</title>
    <link rel="stylesheet" href="../../../css/design.css">
</head>

<body>
    <nav class="navbar"><span>3arabity.com</span>
        <a href="../payment-new/payment-new.php"><button>ADD NEW PAYMENT METHOD</button></a>
        <a href="../../homepage/homepage.php"><button>Home Page</button></a>
    </nav>
    <a href="../payment-new/payment-new.php"><button>ADD NEW CAR</button></a>
    <a href="../../homepage/homepage.php"><button>Home Page</button></a>
    </nav>
    <h1>"Payments Methods"</h1>
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
                            <a href="../payment-edit/payment-edit.php?id=<?php echo $row["id"]; ?>">
                                <button id="edit">Edit</button>
                            </a>
                            <a href="pay-delete.php?id=<?php echo $row["id"]; ?>">
                                <button id="del">Delete</button>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
    </table>
</body>

</html>