<?php
// UTILISER LA VARIABLE $song pour afficher les données
//  Pour les sauts de ligne merci d'utiliser la balise : <br>
// Le but de l'exercice est d'utiliser la commande foreach avec le moins de répétition du code possible
// Il existe plusieurs solutions pour afficher le résultat demandé

global $song;


echo $song['title'];
echo "<br>";

foreach ($song['data'] as $key => $paroles) {
    echo "<br>";
    
    foreach ($paroles as $key2 => $parole) {

        echo  "$key : ligne => $key2 $parole <br>";
    }
}
echo "<br>";
echo $song['author'];