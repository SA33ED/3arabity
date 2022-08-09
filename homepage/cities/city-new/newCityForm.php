<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>New City</title>
  <link rel="stylesheet" href="../../../css/design.css">
</head>

<body>
  <nav class="navbar"><span>3arabity.com</span>
    <button>ADD NEW CITY</button>
    <a href="../../homepage/homepage.php"><button>Home Page</button></a>
  </nav>
  <div class="form-contaner">
    <div class="form-header">
      <h1>New City</h1>
    </div>
    <div class="form-main">
      <form method="post" action="cities-save.php">
        <input type="text" placeholder="Enter City Name" name="cityName" required>
        <button type="submit" name="save_bt">save</button>
        <button><a herf="#">back</a></button>
      </form>
    </div>
  </div>
</body>

</html>