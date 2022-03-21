<section>
  <article>
    <h3>Connexion</h3>
      <form class="colonne" action="administration/CRUD/Read/connexion.php" method="post">
        <label for="login">Login</label>
        <input type="text" name="login" required>
        <label for="mdp">Mot de passe</label>
        <input type="password" name="mdp" required>
        <button class="boutonNav" type="submit" name="button">Connexion</button>
      </form>
</article>
<?php
//Contrôle
$sql= "SELECT COUNT(`idAdmin`)AS `nbr` FROM `administration`";
$param  = [];
$controle = new readDB($sql, $param);
$dataID = $controle->read();
if($dataID[0]['nbr'] == 0) {
  ?>
  <article>
    <h3>Inscription</h3>
    <form class="colonne" action="administration/CRUD/Create/inscription.php" method="post">
      <label for="login">Votre login</label>
      <input type="text" name="login" required>
      <label for="mdp">Votre mot de passe</label>
      <input type="text" name="mdp" required>
      <input type="hidden" name="idNav" value="<?=$idNav?>">
      <button class="boutonNav" type="submit" name="button">Inscription</button>
    </form>
  </article>
  <?php } ?>
</section>
