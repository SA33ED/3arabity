<?php
if (isset($_POST["pmName"])) {
    $pay = $_POST['pmName'];
    $conn = mysqli_connect('localhost', 'root', '', '3arabity');
    $sql = "INSERT INTO payment_methods (name) VALUES ('$pay')";
    mysqli_query($conn, $sql);
    header("Location:../payment-list/payment-list.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>New Payment Method</title>
    <link rel="stylesheet" href="../../../css/design.css">
</head>

<body>
    <nav class="navbar"><span>3arabity.com</span>
        <a href="../../homepage/homepage.php"><button>Home Page</button></a>
    </nav>
    <div class="form-contaner">
        <div class="form-header">
            <h1>New Payment Method</h1>
        </div>
        <div class="form-main">
            <form method="post" action="payment-new.php">
                <input type="text" placeholder="Enter Payment Method" name="pmName" required>
                <button type="submit" name="save_bt">save</button>
                <button><a herf="#">back</a></button>
            </form>
        </div>
    </div>
</body>

</html>