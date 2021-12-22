<?php
/************************** FONCTION VERIFIE SI LA VARIABLE EST UN NOMBRE OU NON *************************************/
function estnombre($var){
    if (is_numeric($var))
        return true;
    else
    return false ;
}
function addition($a, $b){
    if (estnombre($a) && estnombre($b)){
        $resultat_addition = $a + $b ;

        //renvoyer le résultat au programme principal
        return $resultat_addition;
    }
    else{
        return NULL;
    }
}
?>
<?php
/*********************** PROGRAMME PRINCIPAL *****/

//declaration de $a et $b dans le programme principal
$a=13;
$b='toto';

//Appeler la fonction addition()
$resultat = addition($a, $b);

if($resultat ==NULL)
    echo "$a ou $b n'est pas un nombre";
else
    echo $resultat;
echo'<br>';
?>