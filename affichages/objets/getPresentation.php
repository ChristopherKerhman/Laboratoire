<?php
class GetPresentation {
  public function getLastPresentation () {
    $sql = "SELECT `titre`, `texte` FROM `presentation` ORDER BY `idPresentation` DESC LIMIT 1";
    $param = [];
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
