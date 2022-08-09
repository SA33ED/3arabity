<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>New Brand</title>
    <link rel="stylesheet" href="../../../css/design.css">

</head>


<body>
    <nav class="navbar"><span>3arabity.com</span>
        <button>ADD NEW BRAND</button>
        <a href="../../homepage/homepage.php"><button>Home Page</button></a>
    </nav>
    <div class="form-contaner">
        <div class="form-header">
            <h1>New Brand</h1>
        </div>
        <div class="form-main">
            <form method="post" action="brand-save.php">
                <input type="text" placeholder="Enter Brand" name="brandName" required>
                <button type="submit" name="save_bt">save</button>
                <button><a herf="#">back</a></button>
            </form>
        </div>
    </div>
</body>

</html>