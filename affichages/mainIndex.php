<?php
require 'affichages/objets/getPresentation.php';
require 'affichages/objets/printPresentation.php';
$presentation = new PrintPresentation();
$dataTexte = $presentation->getLastPresentation(0);
if($dataTexte !=[]) {
    $presentation->printLastPresentation($dataTexte);
} else {
  echo '<p>Pas encore de présentation dans la base.</p>';
}
