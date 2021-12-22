<?php
    function testerChaine($element) {
        if ($_POST[$element]=='')
            return 'Veuillez saisir un '.$element.'<br>';
        else
            return '';
    }
    $message = ' ';
        if (isset($_POST['email'])) $message= testerChaine('email');
        if (isset($_POST['sujet'])) $message.= testerChaine('sujet');
        if (isset($_POST['message'])) $message.= testerChaine('message');
         echo $message;
    $email = NULL;
    if (filter_var(($_POST['email']), FILTER_VALIDATE_EMAIL)){
       $email=true;
      }
      else{
        echo "L'adresse e-mail n'est pas valide";
      }
     echo $email;
    if (($message=='') && ($email==1)){
        header("location: exo23.php");
    }
?>
<!----------------- le code HTML du formulaire ------------------>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de contact</title>
</head>
<body>
    <form action="#" method="POST">
        <div>
            <label for="email">email :</label>
            <input
                type="text"
                value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>"
                name="email">   
        </div>
        <div>
            <label for="sujet">sujet :</label>
            <input
                type="text"
                value="<?php if(isset($_POST['sujet'])) echo $_POST['sujet'];?>"
                name="sujet">
        </div>
        <div>
        <label for="message">message</label>
        <textarea name="message"><?php if (isset($_POST['message'])) echo $_POST['message'];?></textarea><br>
        </div>
        <div class="button">
            <input type="submit"
                    value="envoyer">
        </div>
    </form>
</body>
</html>