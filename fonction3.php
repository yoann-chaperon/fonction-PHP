<?php
/******** DECLARATIONS DES FONCTIONS *******************/

function mafonction($a, $b) { 

    //code de la fonction
    $resultat_addition = $a + $b ; 
    echo "Le résultat du calcul est " . $resultat_addition.'<br>';
}
?>
<?php
/***********PROGRAMME PRINCIPAL ***************/

//déclaration de $a et $b dans le programme principal
$a=10;
$b=12;

mafonction($a, $b); //appel de la fonction avec des paramètres

$a=5;
$b=2101512;

mafonction($a, $b);

$a=1000000500;
$b=12000000000000000;

mafonction($a, $b);

//je peux aussi transmettre des valeurs constantes
mafonction(13, 20);

//je peux aussi transmettre varaibles et valeurs
mafonction($a, 20);


?>