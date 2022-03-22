<?php include 'navigation/getMain.php'; ?>
<main class="style">
<?php
// Affichage des messages
if(isset($_GET['message'])){
  echo '<h3>'.filter($_GET['message']).'</h3>';
  }
// Affichage du résultat de la navigation -> navigation/getMain.php
// Mode débug
$debug = 1;
if($debug == 1) {
  echo  $dataAffichage[0]['cheminNav'];
}
//Fin du mode débug
  include $dataAffichage[0]['cheminNav'];

  $idNav = $dataAffichage[0]['cheminNav'];
?>

</main>
