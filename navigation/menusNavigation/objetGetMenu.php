<?php
class GetMenu {
  public function triMenu ($levelA) {
    //Tri les menus selon le niveau d'administration
    $sql = "SELECT `idNav`, `nomLien`, `cheminNav`, `valide`, `levelAdmi`, `ordre` FROM `nav` WHERE `levelAdmi` = :levelAdmi AND `valide` = 1 ORDER BY `ordre`";
    $param = [['prep'=>':levelAdmi', 'variable'=>$levelA]];
    $data = new readDB($sql, $param);
    return $data->read();
  }
}
