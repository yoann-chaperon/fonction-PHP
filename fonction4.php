<?php
/******** DECLARATIONS DES FONCTIONS *******************/

//déclaration d'une fonction avec des paramètres $a et $b 
function mafonction ($a, $b) {

        //code de la fonction
        $resultat_addition = $a + $b ;
        //renvoyer le résultat au programme principal
        return $resultat_addition;
}
/********* PROGRAMME PRINCIPAL **********/
$a = 10;
$b = 12;

//Le programme principal recoit la valeur transmise par la fonction dans la variable $resultat
$resultat = mafonction($a, $b).'<br>';
echo $resultat.'<br>';
?>
