<?php
    function testerChaine($element) {
        //Vérifier si le champ est saisi en testant son contenu dans le tableau $_POST        
        if ($_POST[$element]=='' ) //si l'elément n'est pas vide
            return 'Veuillez saisir un '.$element.'<br>';
        else 
            return '';    
    }

    $message=' '; //initialiser la variable avec une valeur METTRE UN ESPACE DANS LES ''
    //Verifieer si les champs sont saisis et afficher le message
    if (isset($_POST['name'])) $message = testerChaine('name');
    if (isset($_POST['passwd'])) $message.= testerChaine('passwd');
    echo $message;

    //si pas d'erreur de saisie, alors rediriger la page vers une autre page
    if ($message==''){
       // header("location: exo23.php");
        }
    
        //le code HTML du formulaire
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'authentification</title>
</head>
<body>
    <form action="#" method="post">
        <div>
            <label for="name">Nom:</label>
            <input 
            type="text"
            value="<?php if(isset($_POST['name'])) echo $_POST['name'];?>"
            name="name">
    </div>
    <div>
    <label for="passwd">Mot de passe:</label>
            <input 
            type="text"
            value="<?php if(isset($_POST['passwd'])) echo $_POST['passwd'];?>"
            name="passwd">
    </div>
    <div class="button">
    <input type="submit" value="envoyer">
    </div>
    </form>
</body>
</html>