<?php
  $db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
  ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Get params</title>
  <style>
  .teachers {
    background-color: grey;
  }
  .pm {
    background-color: olive;
  }
  </style>
</head>
<body>
  <section class="teachers">
    <?php
      for ($i = 0; $i < count($db['teachers']); $i++ ) {
        echo "<div data-number='".($i+1)."'><span>".$db['teachers'][$i]['name']. $db['teachers'][$i]['lastname']."</span></div>";
      }
    ?>
  </section>
  <section class="pm">
    <?php
    for ($i = 0; $i < count($db['pm']); $i++ ) {
      echo "<div data-number='".($i+1)."'><span>".$db['pm'][$i]['name']. $db['pm'][$i]['lastname']."</span></div>";
    }
    ?>
  </section>
</body>
</html>
