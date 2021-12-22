<?php
        /******************* PASSWORD_DEFAULT *************************/

$pass = "MotDePass3";
        echo password_hash($pass, PASSWORD_DEFAULT); // affiche le mot de passee cryté

        
echo'<br>';        
        /****************** VERIFY PASSWORD ****************************/


$pass_hash = password_hash($pass, PASSWORD_DEFAULT);

    if(password_verify($pass, $pass_hash)) {
        echo "mot de passe correct";
}
    else {
         echo "mote de passe incorrect";
}


?>