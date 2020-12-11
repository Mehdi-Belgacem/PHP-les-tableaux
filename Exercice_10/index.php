<?php
  $departements = array (
    '02' => 'Aisne',
    '59' => 'Nord',
    '60' => 'Oise',
    '62' => 'Pas-De-Calais',
    '80' => 'Somme',
  );
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Parti 5 Exercice 10:</h1>
  <ul>
  <?php foreach ( $departements as $key => $departement ): ?>
    <li><?= 'Le département ' . $departement . ' ' . 'a le numéro ' . $key . '.' ?></li>
  <?php endforeach; ?>
  </ul>
</body>
</html>