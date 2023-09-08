<?php
// UTILISER LA VARIABLE $song pour afficher les données
//  Pour les sauts de ligne merci d'utiliser la balise : <br>
// Le but de l'exercice est d'utiliser la commande foreach avec le moins de répétition du code possible
// Il existe plusieurs solutions pour afficher le résultat demandé

global $song;


echo $song['title'];
echo "<br><br>";


foreach ($song['chorus'] as $Refrain){
    echo "$Refrain <br>";
}
echo "<br>";
foreach ($song['first_verse'] as $Verset){
    echo "$Verset <br>";
}
echo "<br>";
foreach ($song['chorus'] as $Refrain){
    echo "$Refrain <br>";
}

echo "<br>";
foreach ($song['second_verse'] as $SVerset){
    echo "$SVerset <br>";
}
echo "<br>";
echo  $song['author'];