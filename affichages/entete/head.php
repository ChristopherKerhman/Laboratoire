<?php
session_start();
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
    <link rel="stylesheet" href="css/master.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
    <title><?=$title?></title>
  </head>

<body>
  <div class="parallax-effect">
    <header>
      <h1><?=$title?></h1>
      <h2><?=$title2?></h2>
      <?php
      include 'navigation/menusNavigation/menuGeneral.php';
       ?>
    </header>
  </div>
