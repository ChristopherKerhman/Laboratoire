<?php
session_start();
include '../../../objets/objetsCommuns.php';
include '../../../functions/fonctionsDB.php';
if($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Récupération de idNav pour navigation
  $idNav = filter($_POST['button']);
  // Test les champs vide + verification d'identité :
  $ok = champsVide($_POST);
  $controleID = new Controle();
  $buffer = $controleID->idOk($_SESSION['connexionToken'], $_SESSION['idAdmin']);
  $ok = $ok + $buffer;
  if($ok == 2) {
    header('location:../../../index.php?message=Au moins un champs est vide.&idNav='.$idNav);
  } else {
    $param = [['prep'=>':titre', 'variable'=>filter($_POST['titre'])],
              ['prep'=>':texte', 'variable'=>filterTexte($_POST['texte'])],
              ['prep'=>':id_Auteur', 'variable'=>$_SESSION['idAdmin']]];
    $insert = "INSERT INTO `presentation`(`titre`, `texte`, `id_Auteur`) VALUES ( :titre, :texte, :id_Auteur)";
    $action = new CurDB ($insert, $param);
    $action->actionDB();
    header('location:../../../index.php?message=Présentation enregistré.&idNav='.$idNav);
  }
} else {
    header('location:../../../index.php?message=Il y a comme un lézard numérique.');
}
