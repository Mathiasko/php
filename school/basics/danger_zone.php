<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  var_dump($_SERVER);
  echo '<hr/>';
  var_dump($_GET);
  echo '<hr/>';
  var_dump($_POST);
  echo '<hr/>';
  ?>

  <form action="danger_zone.php" method="post">
    <fieldset>
      Name: <input type="text" name="name">
      E-mail: <input type="text" name="email">
    </fieldset>
    <button type="submit">Submit</button>
  </form>
</body>

</html>