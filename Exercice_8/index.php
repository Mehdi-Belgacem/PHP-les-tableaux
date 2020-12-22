<?php
  $months = array ('Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Décembre');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Partie 5 Exercice 8</h1>
  <ul>
  <?php
  foreach ( $months as $elements ) : ?>
    <li><?= $elements ;?></li> 
  <?php endforeach; ?>
  </ul>
</body>
</html>