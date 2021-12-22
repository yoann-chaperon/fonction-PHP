<?php
//function direBonjoure($aret){
        //$resultat = $aret * 8;
  //      echo 'l\'arête est de '.$resultat.'cm3 ! ';


function direBonjour($aret){
    $resultat = $aret * $aret * $aret ;
    return  $resultat;
       
}
$resultat = direBonjour(412);
echo 'l\'arête est de '.$resultat.'cm<sup>3 </sup>!<br>';

echo'<br>';
$resul = direBonjour(4);
echo '<br><p>'.$resul.'</p><br>';

$long =strlen('bonjour');
echo 'la var $resul contient '.$long.' caratères !<br>';
print_r($long);
echo '<br>';
$change = str_replace('resul', 'bonjour', 'la var resul contient '.$long.' caratères !');
echo '<br>';
$change = str_shuffle($change);
$change = strtoupper($change);
echo $change;
echo '<br>';
echo '<br>';
//date
$jour =date('d');
$mois = date('m');
$annee = date('Y');
//heure
$heure = date('H');
$minute = date('i');
$changer = 'Yo pelo on est le vendredi '. $jour.' / '. $mois.' / '. $annee . ' et il est exactement ' . $heure.' H '. $minute . ' voila bye !';
$changer = strtoupper($changer);
echo $changer;

//volume
$vol = 5 * 5 * 3.14 * 2 * (1/3);
echo 'Le volume du cône est de '.$vol.' cm<sup>3</sup><br>';

function volumeCone($rayon, $hauteur){
        $volume = $rayon * $rayon * 3.14 * $hauteur * (1/3);
        return $volume;
}

$volume = volumeCone(2, 6);
echo 'le volume est de ' .$volume. 'cm<sup>3</sup><br>'

















?>
