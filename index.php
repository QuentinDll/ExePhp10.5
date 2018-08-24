<?php
// declaration du tableaux
$state = array(
  '02' => 'Aisne',
  '59' => 'Nord',
  '60' => 'Oise',
  '62' => 'Pas-de-Calais',
  '80' => 'Somme'
);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice 10</title>
</head>
<body>
  <?php
  // declaration de la boucle foreach
  foreach ($state as $key => $value){
    echo "Le département" ." ". $value ." ". "a le numéro" ." ". $key .". ";
  }
  ?>
</body>
</html>