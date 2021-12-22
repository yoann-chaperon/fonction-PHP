<?php
if(isset($_POST['submit'])) {
    $connection = mysqli_connect("localhost", "yoann", "guizmo", "forum");
        if (!$connection) die ("connection impossible");

    //lire depuis la BDD le mot de passe dont l'email correspond à ce qui a été saisis dans le formulaire

    $query = "SELECT password FROM membres WHERE email='".$_POST['email']."';";

    //envoyer la requête au serveur
    $requete = mysqli_query($connection, $query);

    //Lire les données depuis la BDD
    $resultat = mysqli_fetch_assoc($requete);
    
    print_r($resultat);

    //comparer avec password_verify la saisie du mot de passe en clair avec le hachage de la BDD
    $hash='$2y$10$u3zHr7gKh64tcibSRZBbo.BpuqsLJmm9TCZ5DIRXo.ReloWmB6KzO';
    
    
    
    if(password_verify($_POST['password'], $resultat['password'])) {
        echo "Mot de passe correct<br>";
    
        //rediriger la page vers le forum
        header("location: exo23.php");
    }
    else {
        echo "l'email ou le mot de passe ne correspond pas !<br>";
    }
}
?>
<!--------------------- CODE HTML ------------>
<!doctype html>
<html lang="en">
  <head>
    <title>Formulaire profil membre</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
      <h1>Formulaire profil membre</h1>
      <form action="#" method="POST">

    <!-- email -->
          <div class="form-group">
              <label for="email">email</label>
              <input type="text" name="email" class="form-text">
          </div>

    <!-- password -->
          <div class="form-group">
              <label for="password">password</label>
              <input type="text" name="password" class="form-text">
          </div>

    <!-- submit -->
          <input type="submit" class="btn btn-primary" name="submit" value="se connecter">
      </form>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>