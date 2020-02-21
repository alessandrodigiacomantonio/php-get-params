<?php
  $poetry = "Le stazioni si somigliano tutte; poco importa se le luci non riescono a rischiarare più in là del loro alone sbavato, tanto questo è un ambiente che tu conosci a memoria, con l'odore di treno che resta anche dopo che tutti i treni sono partiti, l'odore speciale delle stazioni dopo che è partito l'ultimo treno. Le luci della stazione e le frasi che stai leggendo sembra abbiano il compito di dissolvere più che di indicare le cose affioranti da un velo di buio e di nebbia. Io sono sbarcato in questa stazione stasera per la prima volta in vita mia e già mi sembra d'averci passato una vita, entrando e uscendo da questo bar, passando dall'odore della pensilina all'odore di segatura bagnata dei gabinetti, tutto mescolato in un unico odore che è quello dell'attesa, l'odore delle cabine telefoniche quando non resta che recuperare i gettoni perché il numero chiamato non dà segno di vita.";
  $sentences = explode(".", $poetry);
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
  <section>
    <?php
    for ($i = 0; $i < count($sentences); $i++) {
      echo "<p>$sentences[$i]</p>";
    }
    ?>
  </section>
</body>
</html>
