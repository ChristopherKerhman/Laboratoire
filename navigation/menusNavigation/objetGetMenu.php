<?php
class GetMenu {
  public function triMenu ($levelA) {
    //Tri les menus selon le niveau d'administration
    $sql = "SELECT `idNav`, `nomLien`, `cheminNav`, `valide`, `levelAdmi`, `ordre` FROM `nav` WHERE `levelAdmi` = :levelAdmi";
    $param = [['prep'=>':levelAdmi', 'variable'=>$levelA]];
    $data = new readDB($sql, $param);
    return $data->read();
  }
}
