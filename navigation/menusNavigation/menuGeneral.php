<?php
require 'navigation/menusNavigation/objetGetMenu.php';
require 'navigation/menusNavigation/objetPrintMenu.php';
$menu = new PrintMenu();
$dataMenu = $menu->triMenu(0);
$dataMenuArticle = $menu->triArticle();
$menu->printMenuArticle($dataMenuArticle);
$menu->printListe($dataMenu);
if(isset($_SESSION['admin']) &&  ($_SESSION['admin'] == true)) {
  $dataMenu = $menu->triMenu(1);
  $menu->printListeAdmin($dataMenu);
}

 ?>
