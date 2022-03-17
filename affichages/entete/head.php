<?php
require 'objets/paramDB.php';
require 'objets/readDB.php';
// Fonction de sanitize basique.
function filter($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
// Element du site
$title = 'Laboratoire';
$title2 = 'Experimentale';
$description = 'elements de description';
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?=$description?>">
    <link rel="stylesheet" href="css/master.css">
    <title><?=$title?></title>
  </head>
<body>
  <header>
    <h1><?=$title?></h1>
    <h2><?=$title2?></h2>
    <?php
    include 'navigation/menusNavigation/menuGeneral.php';
     ?>
  </header>
