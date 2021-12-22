<?php
/************************DECLARATIONS DES FONCTIONS ******************/

//Déclaration d'une fonction avec des paramètres $a et $b
function testerChaine($chaine){

    //code de la fonction
    if($chaine==''){
        return('Veuillez saisir une valeur !');
    }
    else { 
        return 'OK !';
    }
}
/*************************** PROGRAMME PRINCIPAL *****************/

//Déclaration de $texte dans le programme principal
$texte = 'Hello World';

// appel de la fonction avec un paramètre chaine
$resultat = testerChaine($chaine);

//afficher le résultat du test effectué par la fonction
echo $resultat.'<br>';

$texte = ''; //vider la variable $texte

//appel de la fonction avec un paramètre chaine
$resultat = testerChaine($texte);

//afficher le résultat du test effectué par la fonction
echo $resultat.'<br>';