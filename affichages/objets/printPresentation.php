<?php
class PrintPresentation extends GetPresentation {
  public function printLastPresentation($data) {
    echo '<article class="presentation">
    <h3>'.$data[0]['titre'].'</h3>
      <p>'.$data[0]['texte'].'</p>
    </article>';
  }
  public function liste ($data, $idNav) {
    echo '<ul class="listeClassique"><li><strong>Liste des précédentes présentations :</strong></li>';
      foreach ($data as $key => $value) {
        echo '<li>
        <form  action="administration/CRUD/Delette/presentation.php" method="post">
          <input type="hidden" name="idPresentation" value="'.$value['idPresentation'].'">
          <button class="boutonNav" type="submit" name="button" value="'.$idNav.'">Effacer '.$value['titre'].'</button>
        </form>
        </li>';
      }
    echo '</ul>';
  }
}
