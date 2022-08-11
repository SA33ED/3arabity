<?php
if (isset($_GET["id"])) {
    $id = $_GET['id'];
    $conn = mysqli_connect('localhost', 'root', '', '3arabity');
    $sql = "DELETE FROM cities WHERE id='$id'";
    mysqli_query($conn, $sql);
    header("Location:citiesList.php");
}
$conn = mysqli_connect('localhost', 'root', '', '3arabity');
$sql = "SELECT * FROM cities";
$data = mysqli_query($conn, $sql); //dataSet or recordSet
// $city=mysqli_fetch_row($data);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Cities</title>
    <link rel="stylesheet" href="../../../css/design.css">
</head>

<body>
    <nav class="navbar"><span>3arabity.com</span>
        <a href="../city-new/newCityForm.php"><button>ADD NEW CITY</button></a>
        <a href="../../homepage/homepage.php"><button>Home Page</button></a>
    </nav>
    <h1>"Cities List"</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
            <thead>
            <tbody>
                <?php while ($city = mysqli_fetch_assoc($data)) { ?>
                    <tr>
                        <td><?php echo $city["id"]; ?></td>
                        <td><?php echo $city["name"]; ?></td>
                        <td><a href="http://localhost/3arabity/homepage/cities/city-edit/editCityForm.php?id=<?php echo $city["id"]; ?>"><button id="edit">Edit</button></a>
                            <a href="citiesList.php?id=<?php echo $city["id"]; ?>"><button id="del">delete</button></a>
                        </td>
                    </tr>
                <?php } ?>

            </tbody>
    </table>
</body>

</html>