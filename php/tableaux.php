<?php

//les tableaux sont des variables un peu spécifiques :
// on peu stocker plusieurs valeurs differentes dans un meme tableau !

//pour créer un tableau, deux syntaxes :
$monTableau = array("valeur1", "valeur2", "valeur3");

//autre syntaxe :
$monTableau2 = ["valeur1", "valeur2", "valeur3"];

//les differentes valeurs dans un tableau sont indexées automatiquement par PHP
// C'est a dire que PHP associe à chaque valeur un "index", une clé, qui va nous permettre de récupérer une valeur spécifique

//pour réupérer une valeur spécifique on utilise la syntaxe $nomDuTableau[index]
//exemple si on veut afficher la valeur2, on utilise :

echo $monTableau[1];

//! ATTENTION les tableaux commencent à 0 !!
// donc valeur2 est à l'index 1 !

//on peut stocker ce que l'on veut dans un tableau
$monTableau3 = ["coucou", 42, 3.14, true, $monTableau];

//exemple meilleurs films de l'année
$tableauTopFilms = ["Barbie", "Oppenheimer", "Asteroid City", "Hunger Games"];

//pour afficher cette liste on va devoir la parcourir !
//on pourrait le faire à la main :

echo "Top 4 films : ";
echo "<ol>";
echo "<li>" . $tableauTopFilms[0] . "</li>";
echo "<li>" . $tableauTopFilms[1] . "</li>";
echo "<li>" . $tableauTopFilms[2] . "</li>";
echo "<li>" . $tableauTopFilms[3] . "</li>";
echo "</ol>";

//on va plutot utiliser une boucle
echo "Top 4 films : (via la boucle)";
echo "<ol>";
for($i=0;$i<5;$i++){
    echo "<li>" . $tableauTopFilms[$i] . "</li>";
}
echo "</ol>";

//PHP nous permet de compter le nombre d'éléments dans un tableau 
// pour ça on utilise count($nomDuTableau)
echo "J'ai " . count($tableauTopFilms) . " films dans mon top de l'année";

//exemple boucle + count (pour s'adapter à un nombre d'éléments variables dans un tableau)
echo "Top 4 films : (via la boucle+count)";
echo "<ol>";
for($i = 0 ; $i < count($tableauTopFilms); $i++){
    echo "<li>" . $tableauTopFilms[$i] . "</li>";
}
echo "</ol>";