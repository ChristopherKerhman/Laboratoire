<?php
session_start();
include '../../../objets/objetsCommuns.php';
include '../../../functions/fonctionsDB.php';
$controleID = new Controle();
$buffer = $controleID->idOk($_SESSION['connexionToken'], $_SESSION['idAdmin']);
if(($buffer == 0) || ($buffer > 1)) {
    header('location:../../../index.php?message=Il y a comme un lézard numérique.');
} else {
  if($_SERVER['REQUEST_METHOD'] === 'POST') {
    print_r($_POST);
    $idNav = filter($_POST['button']);
    $param = [['prep'=>':idPresentation', 'variable'=>filter($_POST['idPresentation'])]];
    $sqlDel = "DELETE FROM `presentation` WHERE `idPresentation` = :idPresentation";
    $del = new CurDB(  $sqlDel ,$param);
    $del->actionDB();
    header('location:../../../index.php?message=Message effacé définitivement.&idNav='.$idNav);
  } else {
      header('location:../../../index.php?message=Il y a comme un lézard numérique.');
  }
}
