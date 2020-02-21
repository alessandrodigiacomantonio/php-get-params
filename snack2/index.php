<?php
  $name = $_GET['name'];
  $mail = $_GET['email'];
  $age = $_GET['age'];
  if ( strlen($name) > 3 && strpos($mail, '@') !== false && strpos($mail, '.') !== false && is_numeric($age) ) $access = 'riuscito';
  else $access = 'negato';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Get params</title>
  <style>
    .negato {
      color: brown;
    }
    .riuscito {
      color: olive;
    }
  </style>
</head>
<body>
  <h1 class="<?php echo $access ?>">Accesso <?php echo $access?></h1>
</body>
</html>
