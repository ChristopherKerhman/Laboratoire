<?php
class PrintMenu extends GetMenu {
  public function printListe($data) {
    echo '<ul>';
      foreach ($data as $key => $value) {
        echo '<li><a href="index.php?idNav='.$value['idNav'].'">'.$value['nomLien'].'</a></li>';
      }
    echo'</ul>';
  }
}
