<?php
// Fichier de connexion à la zone d'administration
session_start();
include '../../../objets/objetsCommuns.php';
include '../../../functions/fonctionsDB.php';
if($_SERVER['REQUEST_METHOD'] === 'POST') {
  


} else {
  header('location:../../../index.php?message=Il y a comme un lézard numérique.');
}
