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
