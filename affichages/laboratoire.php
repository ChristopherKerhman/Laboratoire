<h3>Laboratoire php</h3>
<?php
function genToken ($size) {
    $alpha = 'abcdefghijklmnopqrstuvwxyz123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $token = NULL;
    for ($i=0 ; $i < $size  ; $i++ ) {
      $number = rand(1, strlen($alpha));
      $letter = substr($alpha, $number, 1);
      $token = $token.$letter;
      //$token =  $token.substr($alpha, rand(0,strlen($alpha)));
    }
    return $token;
}
$stokage = array();
for ($i=0; $i < 10 ; $i++) {
  $token = genToken(10);
  array_push($stokage, $token);
}
for ($i=0; $i < 1 ; $i++) {
  echo '<h4>Génération d\'un token</h4>
  <p>Token de '.$nbr = strlen($stokage[$i]).' caractères : '.$stokage[$i].'</p>';
}
 ?>
