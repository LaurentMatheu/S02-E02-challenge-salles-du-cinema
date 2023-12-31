<?php   

//EN programmation quelque soit le langage, (hors HTML/CSS)
// on peut répéter une instruction plusieurs fois en utilisant ... une boucle 

/** En PHP on va avoir plusieurs boucles :
 *  - la boucle while
 *  - la boucle for 
 *  - la boucle foreach 
 * 
 */

 //* Boucle While :
 /* while (condition) {
    instructions à répéter TANT QUE la condition est vraie
 }
 */

 $cartes = 0;
 echo "Je commence à piocher : <br>";

//! Attention à éviter les boucles infinies avec while true.

 while ($cartes < 10) {
    //TANT QUE j'ai moins de 10 cartes je pioche
    //on répète les instructions entre les {}

    echo "J'ai " . $cartes . " carte(s) <br>";

    //à chaque fin de boucle on pioche une carte !
    $cartes++;
 }

 echo "J'ai pioché " . $cartes . " cartes <br><br>";


 //* Boucle For
  /* for (valeur initiale, condition de fin, incrémentation) || ($i </> / <=/>= valeur finale, $i++ $i-- $i+=5..10..etc) {
    instructions à répéter TANT QUE la condition de fin n'est pas vérifiée.
 }
 */

 echo "Je pioche des points : <br>";

 for ($points = 0; $points < 5; $points++) // ou $points +=2 si on veut incrémenter de 2pts par tour
{ 
   echo "J'ai " . $points . " point(s) <br>";
}

 echo "J'ai pioché " . $points . " points d'action <br><br>";

// en général on utilise :
/*
for ($i=0; $i>5; $i++) {
   instructions 
}
*/

//syntaxe alternative au echo, PHP propose : et endfor qui remplacent des {}

?>

<ul>
   <?php for ($i=0; $i<5; $i++) : ?>
   <li>Coucou</li>
   <?php endfor ?>
</ul>

<ul>
   
   <?php
   $compteur = 1; 
   while($compteur<5) : ?>
   <li>Coucou</li>
   <?php endwhile ?>
</ul>