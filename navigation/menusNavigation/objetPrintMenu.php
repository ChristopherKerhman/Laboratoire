<?php
class PrintMenu extends GetMenu {
  public function printListe($data) {
    echo '<ul class="navigation">';
    echo '<li><a class="boutonNav" href="index.php?idNav=0">Index</a></li>';
      foreach ($data as $key => $value) {
        echo '<li><a class="boutonNav" href="index.php?idNav='.$value['idNav'].'">'.$value['nomLien'].'</a></li>';
      }
    echo'</ul>';
  }
}
