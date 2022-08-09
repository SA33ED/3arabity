 <?php
    $id = $_GET["id"];
    $conn = mysqli_connect('localhost', 'root', '', '3arabity');
    $sql = "DELETE FROM departments WHERE id='$id'";
    $data = mysqli_query($conn, $sql);
    header("Location:departments-list.php"); ?>