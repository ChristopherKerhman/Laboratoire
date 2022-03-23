<?php
class PrintMenu extends GetMenu {
  public function printListe($data) {
      foreach ($data as $key => $value) {
        echo '<li><a class="boutonNav" href="index.php?idNav='.$value['idNav'].'">'.$value['nomLien'].'</a></li>';
      }
        echo '<li><a class="boutonNav" href="librairie/CV-Calmes.pdf">Télécharger mon CV</a></li>';
  }
  public function printMenuArticle($data) {
    foreach ($data as $key => $value) {
        echo '<li><a class="boutonNav" href="index.php?idNav=10&idP='.$value['idPresentation'].'">'.$value['titreMenu'].'</a></li>';
    }
  }
  public function printListeAdmin($data) {
    echo '<ul class="navigation">';
      foreach ($data as $key => $value) {
        echo '<li><a class="boutonNavAdmin" href="index.php?idNav='.$value['idNav'].'">'.$value['nomLien'].'</a></li>';
      }
    echo'</ul>';
  }

}
