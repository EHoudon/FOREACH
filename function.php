<?php
// UTILISER LA VARIABLE $song pour afficher les données
//  Pour les sauts de ligne merci d'utiliser la balise : <br>
// Le but de l'exercice est d'utiliser la commande foreach avec le moins de répétition du code possible
// Il existe plusieurs solutions pour afficher le résultat demandé

global $song;


function printChorus() {
    global $song;

    foreach($song['data']['chorus']['chorus_1'] as $line) {
        echo $line . "<br>";
    }

    echo "<br>";
}

echo $song['title'] . "<br><br>";

foreach ($song['data']['verse'] as $paroles) {
    printChorus();
    
    foreach ($paroles as  $parole) {

        echo  " $parole <br>";
    }

    echo "<br>";
}

echo $song['author'];