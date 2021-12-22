<?php
/********************  DECLARATION DES FONCTIONS ***************/

//Declaration d'une fonction qui s'appelle mafonction:
function mafonction(){
    //déclaration des variables locales a la fonction
    $a=12;
    $b=23;

    //code da la fonction
    $resultat_addition = $a +$b ;
    echo"le résultat du calcul est " .$resultat_addition;
}

/*************** PROGRAMME PRINCIPAL *****************/

//Ici les instructions avant 

mafonction(); // appel de la fonction déclarées ci-dessus

// ici les instruction après