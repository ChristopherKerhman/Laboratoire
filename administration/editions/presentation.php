<?php
  require 'affichages/objets/getPresentation.php';
  require 'affichages/objets/printPresentation.php';
  $presentation = new PrintPresentation();
  $dataTexte = $presentation->getLastPresentation();
  //print_r($dataTexte);
?>
<div class="containerPresentation">
  <div class="presentationEditor">
    <h3>Présentation actuelle</h3>
      <?php
      if($dataTexte !=[]) {
        $presentation->printLastPresentation($dataTexte);
      } else {
      echo '<p>Pas encore de présentation dans la base.</p>';
      }
      ?>
  </div>
  <div class="Liste">
    <?php
      $dataListe =  $presentation->listePresentation(10);
      $presentation->liste ($dataListe, $idNav);
      ?>
  </div>
  <div class="AddPresentation">
    <h3>Ajouter la présentation</h3>
    <form class="colonne" action="administration/CRUD/Create/presentation.php" method="post">
      <label for="titre">Titre de votre présentation</label>
      <input id="titre" type="text" name="titre" required>
      <label for="texte">Votre présentation / Accepte les balises HTML</label>
              <textarea id="texte" name="texte" rows="20" cols="220" required>
                <?php
                  if(isset($dataTexte[0]['texte'])) {
                      echo $dataTexte[0]['texte'];

                  } else {
                      echo 'Pas encore de présentation.';
                  }
                 ?>

              </textarea>
      <button class="boutonNav" type="submit" name="button" value="<?=$idNav?>">Enregistrer</button>
    </form>

  </div>
</div>
