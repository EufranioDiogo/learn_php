<!DOCTYPE html>
<html lang="pt-ao">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP First Page</title>
</head>
<body>
  <h1>Olá mundo!1</h1>

  <?php 
    for ($i=0; $i < 10; $i++) { 
      # code...
      $value = $i + 1;
      if ($value % 2 == 0) {
        echo "<h1>Count: $value \u{1F30E}</h1>";
      } else {
        echo "<hr/>";
      }
    }
  ?>

</body>
</html>