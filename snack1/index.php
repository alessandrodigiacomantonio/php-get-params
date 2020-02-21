<?php
  $is_password = $_GET['password'];
  $is_password != 'boolean' ? $is_password = 'wrong' : $is_password = 'true';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Get params</title>
  <style>
    .wrong {
      color: brown;
    }
    .true {
      color: olive;
    }
  </style>
</head>
<body>
  <p class="<?php echo $is_password; ?>">
    Password
  </p>
</body>
</html>
