<?php
require 'navigation/menusNavigation/objetGetMenu.php';
require 'navigation/menusNavigation/objetPrintMenu.php';
$menu = new PrintMenu();
$dataMenu = $menu->triMenu(0);
$menu->printListe($dataMenu);
 ?>
