<?php
function filter($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
session_start();
require 'objets/paramDB.php';
require 'objets/readDB.php';
// Fonction de sanitize basique.
/*function filter($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}*/
// Element du site
$title = 'Portfolio de monsieur Christophe Calmes';
$title2 = 'Mes projets dans le développement web.';
$description = 'web, vueJS, php, POO, recherche, emploi, CMS, Wordpress';
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?=$description?>">
    <meta name="Cache-Control" content="max-age=31536000">
    <link rel="stylesheet" href="css/master.css">

    <title><?=$title?></title>
  </head>

<body>
  <div class="parallax-effect">
    <header>
      <h1><?=$title?></h1>
      <h2><?=$title2?></h2>
      <ul class="navigation">
        <?php
        include 'navigation/menusNavigation/menuGeneral.php';
         ?>

      </ul>
    </header>
  </div>
