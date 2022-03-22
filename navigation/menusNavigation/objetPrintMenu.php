<?php
class PrintMenu extends GetMenu {
  public function printListe($data) {
    echo '<ul class="navigation">';
      foreach ($data as $key => $value) {
        echo '<li><a class="boutonNav" href="index.php?idNav='.$value['idNav'].'">'.$value['nomLien'].'</a></li>';
      }
        echo '<li><a class="boutonNav" href="librairie/CV-Calmes.pdf">Télécharger mon CV</a></li>';
    echo'</ul>';
  }
  public function printListeAdmin($data) {
    echo '<ul class="navigation">';
      foreach ($data as $key => $value) {
        echo '<li><a class="boutonNavAdmin" href="index.php?idNav='.$value['idNav'].'">'.$value['nomLien'].'</a></li>';
      }
    echo'</ul>';
  }
}
