<?php
/**************************************** preg_match *********************************/

        //recherche toto dans la chaine proposée :
        if(preg_match('/toto/','toto est derriere l\'église')){
            echo'trouvé !<br>'; // si vrai
        }
        else {
            echo 'pas trouvé !'; // si faux
        }
        echo'<br>';
?>
<?php
echo'<br>';
/**************************************** preg_match avec tableau grace a " $matches " *********************************/

        //recherche toto dans la chaine proposée :
        if(preg_match('/toto/','toto est derriere l\'église mais toto reviens bientôt car il est occupé.',$matches)){
            echo 'trouvé !<br>'; // si vrai
        }
        else {
            echo 'pas trouvé !'; // si faux
        }
        //$matches est le tableau dans lequel est stocké le premier résultat
        print_r($matches).'<br>';
        echo'<br>';
?>
<?php
echo'<br>';
/**************************************** preg_match_all *********************************/

//recherche toto dans la chaine proposée :
        $nbtrouve = preg_match_all('/toto/', 'toto est derriere l\'église mais toto reviens bientot car il est occupé.', $matches);
        
        //nombre d'occurences trouvées
        echo '<br>il y a '.$nbtrouve.' toto<br>';
        //$matches est le tableau dans lequel est stocké le résultat
        print_r($matches);
        echo'<br>';
?>
<?php
echo'<br>';
/************************************* preg_replace avec affichage dans un tableau avec " $ matches " ************************/

        //remplace toto par titi dans la chaine proposé
        $matches = preg_replace('/toto/', 'titi', 'toto est derriere l\'église mais toto est occupé et il revient bientôt.');

        //$matches est le  tableau dans lequel est stockés le résultat
        print_r($matches);
        echo'<br>';
?>
<!--..-->