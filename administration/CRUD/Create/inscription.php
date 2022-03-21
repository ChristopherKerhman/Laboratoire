<?php
// Fichier de connexion à la zone d'administration
session_start();
// Element pour inclure la bibliothèque d'objets commun.
include '../../../objets/objetsCommuns.php';
include '../../../functions/fonctionsDB.php';
if($_SERVER['REQUEST_METHOD'] === 'POST') {
$idNav = filter($_POST['idNav']);
// Controle doublon de login dans la DB.
$sql = "SELECT `login` FROM `administration` WHERE `login` = :login";
$controle = new Controle ();
$valide =  $controle->doublon($sql, 'login', filter($_POST['login']));
if ($valide > 0) {
  header('location:../../../index.php?message=Login déjà utilisé.');
} else {
print_r($_POST);
$_POST = doublePOP($_POST);
$_POST['mdp'] = haschage(filter($_POST['mdp']));
$preparation =  new Preparation();
$param = $preparation->creationPrep($_POST);
$SQLinsert = "INSERT INTO `administration`(`login`, `mdp`) VALUES (:login, :mdp)";
$insert = new CurDB($SQLinsert, $param);
$action = $insert->actionDB();
header('location:../../../index.php?message=Administrateur enregistré&idNav='.$idNav);
}
} else {
  header('location:../../../index.php?message=Il y a comme un lézard numérique.');
}
