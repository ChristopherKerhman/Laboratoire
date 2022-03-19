<?php
if (isset($_GET['idNav'])) {
  $idNav = filter($_GET['idNav']);
  $requetteSQL = "SELECT  `cheminNav`
  FROM `nav` WHERE `idNav` = :idNav";
  $prepare = [['prep'=> ':idNav', 'variable' => $idNav]];
  $affichage = new readDB($requetteSQL, $prepare);
  $dataAffichage = $affichage->read();
  // Traitement des erreurs d'affichage.
  if ($dataAffichage == []) {
    $dataAffichage = [['cheminNav'=>'affichages/mainIndex.php']];
    $diNav = 0;
  }
} else {
  $dataAffichage = [['cheminNav'=>'affichages/mainIndex.php']];
  $diNav = 0;
}
?>
