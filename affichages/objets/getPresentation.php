<?php
class GetPresentation {
  public function getLastPresentation ($type) {
    $sql = "SELECT `titre`, `texte` FROM `presentation` WHERE `adresse` = :adresse ORDER BY `idPresentation` DESC LIMIT 1";
    $param = [['prep' => ':adresse', 'variable'=>$type]];
    $getPresentation =  new readDB($sql, $param);
    return  $dataTexte = $getPresentation->read();
  }
  public function listePresentation($limit) {
    $sql = "SELECT `idPresentation`, `titre`, `valide` FROM `presentation` ORDER BY `idPresentation` DESC LIMIT {$limit}";
    $param = [];
    $getPresentation =  new readDB($sql, $param);
    return  $dataList = $getPresentation->read();
  }
}
