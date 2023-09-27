
<?php
function randomPassword($password) {
  $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789!£$%&/";
  for ($i = 0; $i < 8; $i++) {
      $num = rand(0, count($alphabet)-1);
      $pass[$i] = $alphabet[$num];
  } 
  return $pass;

}
?>