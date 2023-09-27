<?php 
include './function.php';

function randomPassword($password) {
  $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789!£$%&/";
  for ($i = 0; $i < 8; $i++) {
      $num = rand(0, count($alphabet)-1);
      $pass[$i] = $alphabet[$num];
  } 
  return $pass;

}


$has_password = isset($_GET['password']);

if($has_password){
  $password = $_GET['password'];
}





?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Strong Password Generator</title>

   <!-- BOOTSTRAP -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

</head>
<body>
  <div class="container mt-5" >
    <div class="card ">
    <div class="card-header">
      <h2>Generatore Password</h2>
      </div>
  <div class="card-body ">
    <form method="GET">
<div class="mb-3" >
  <input type="password" name="password" id="password"  class="form-control mt-3" required > 
</div>
<div class="mb-3" >
<button class="btn btn-primary">Invia</button>
</div>

    </form>  
  </div>
</div>
  </div>
  
</body>
</html>