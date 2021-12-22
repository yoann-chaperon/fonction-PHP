<?php
/*1*/           /*trouvé le nombre de kangourou*/
/*1.2*/           /*remplaçons le mot « kangourou » par le mot « koala » */





/************ PROGRAMME PRINCIPALE **********************************/

$texte = '<h1>Le Kangourou</h1>
<p>Le <b>kangourou</b> est un animal emblématique et célèbre en <b>Australie</b>. On le reconnaît tout de suite par sa manière de se déplacer. Il effectue de petits ou de grands bonds avec subtilité, et a une vitesse de course comprise entre 20 et 60 km/h.
D’ailleurs une « légende » existe sur l’origine du nom <b>« kangourou »</b>. Lorsque les anglais demandèrent aux aborigènes comment se nommait cet animal ils auraient répondu  « Kan Ghu Ru« , qui signifieraient « Je ne comprends pas ». Les anglais pensaient alors que <b>« kangourou »</b> était le nom de cet animal.
Mais rien de tout ça n’est vrai. <b>« Kangaroo »</b> (kangourou en anglais) est un dérivé du mot « gangurru » (en langage aborigène Guugu Yimidhirr) qui veut dire <b>kangourou</b> gris.</p>
<p><a href="http://www.guide-australie.fr/kangourou/" target="_blank">Plus d\'infos sur ce site</a></p>';

/******************************** FONCTION ****************************/

/******************************** 1 ********************************/

        echo 'exo1<br>';

    $result = preg_match_all('/kangourou/i', $texte);

        echo 'il y a '.$result.' fois le mot kangourou !<br>' ;

/******************************** 1.2 *********************************/

        echo 'exo2<br>';

    $change = preg_replace('/kangourou/i', 'koala', $texte);

        /*print_r($change);*/
        echo $change;
        
        
        /****verifie du nombre de koala ****/

    $resulta = preg_match_all('/kangourou/i', $texte);

        echo 'il y a '.$resulta.' fois le mot koala !<br>' ;    
?>

