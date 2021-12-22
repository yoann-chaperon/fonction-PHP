<?php
/**********DECLARATION DES VARIEBLES LOCALES *************************/
$a=12;
$b=23; 

/***********DECLARATION DES FONCTIONS ************************/

//Déclaration d'une fonction qui s'appelle mafonction:
function mafonction() { 
    $resultat_addition = $a + $b ; 
    echo "Le résultat du calcul est " . $resultat_addition;
}
/***********PROGRAMME PRINCIPAL ***************/

//ici les instructions avant

mafonction();//appel de la fonction déclarée ci-dessus

//ici les instructions après
?> 
