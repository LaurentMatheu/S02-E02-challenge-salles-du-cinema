<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Cinéma Rodia - Haut-Cloques</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=PT+Sans+Narrow:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<!--Header -->
<?php include 'footer.php'; ?>

  <main class="main-container">
    <section>
      <h2 class="page__title">Tarifs</h2>
      <div class="prices__lists">

        <div class="prices__list">
          <h3 class="prices__list-title">
            A l'unité
          </h3>
          <ul>
            <li class="prices__item">
              <span class="prices__item-desc">Tarif Plein</span> <span class="prices__item-value">8,30 &euro;</span>
            </li>
            <li class="prices__item">
              <span class="prices__item-desc">Tarif Réduit</span> <span class="prices__item-value">6,80 &euro;</span>
            </li>
            <li class="prices__item">
              <span class="prices__item-desc">Tarif Enfant</span> <span class="prices__item-value">4,50 &euro;</span>
            </li>
            <li class="prices__item">
              <span class="prices__item-desc">Supplément 3D</span> <span class="prices__item-value">1,00 &euro;</span>
            </li>
          </ul>
        </div>

        <div class="prices__list">
          <h3 class="prices__list-title">
            Abonnement
          </h3>
          <ul>
            <li class="prices__item">
              <span class="prices__item-desc">5 places</span> <span class="prices__item-value">-10%</span>
            </li>
            <li class="prices__item">
              <span class="prices__item-desc">5 places -25ans </span> <span class="prices__item-value">-20%</span>
            </li>
          </ul>
        </div>
      </div>

      <div class="prices__description">
        <p class="prices__description-line">
          <strong class="prices__description-name">Tarif réduit</strong> pour les personnes de + de 60 ans et de moins de 16 ans
        </p>
        <p class="prices__description-line">
          <strong class="prices__description-name">Tarif enfant</strong> pour les - de 14 ans
        </p>
      </div>
    </section>

    <section>
      <h2 class="page__title">Tarif du capitaine</h2>

    <?php

    //une variable $montant qui servira au calcul ci dessous
    $montant = 0; //ou null

    //calcul du montant payé par le capitaine
    $age = 43;

    $tarifPlein = 8.3;
    $tarifEnfant = 4.5;
    $tarifReduit = 6.8;

    if ($age < 14){
      //Le capitaine a moins de 14 ans --> tarif enfant
      $montant = $tarifEnfant;
    } else if ($age < 16 || $age > 60) {
      //Le capitaine a moins de 16 ans ou plus de 60 ans --> tarif réduit
      $montant = $tarifReduit;
    } else {
      //sinon --> tarif plein
      $montant = $tarifPlein;
    }

    ?>

      <div class="prices__list">
        <h3 class="prices__list-title">
          <span class="prices__item-desc">Age</span> <span class="prices__item-value">Tarif unitaire</span>
        </h3>
        <ul>
          <li class="prices__item">
            <span class="prices__item-desc"><?php echo $age; ?> ans</span> <span class="prices__item-value"><?php echo $montant; ?> &euro;</span>
          </li>
        </ul>
      </div>

    </section>

    <section>
      <h2 class="page__title">Tarif âge par âge</h2>
      
      <div class="prices">
        <div class="prices__list">
          <h3 class="prices__list-title">
            <span class="prices__item-desc">Age</span> <span class="prices__item-value">Tarif unitaire</span>
          </h3>
          <ul>

            <?php 
          
            // pour afficher 99 <li>, on boucle !
            //exemple avec for :
            for ($i = 1; $i <= 99; $i++) {
              // les instructions entre {} sont répétées 99x

              //on calcule le montant en fonction de l'age

              $age = $i; // ou on change $age par $i dans la boucle

              if ($age < 14){
                //Le capitaine a moins de 14 ans --> tarif enfant
                $montant = $tarifEnfant;
              } else if ($age < 16 || $age > 60) {
                //Le capitaine a moins de 16 ans ou plus de 60 ans --> tarif réduit
                $montant = $tarifReduit;
              } else {
                //sinon --> tarif plein
                $montant = $tarifPlein;
              }

              //si on veut afficher 1 an
              if ($i == 1) {
              echo '<li class="prices__item">';
              echo '<span class="prices__item-desc">' . $i .' an</span> <span class="prices__item-value">' . $montant . ' &euro;</span>';
              echo '</li>';
            } else {
              echo '<li class="prices__item">';
              echo '<span class="prices__item-desc">' . $i .' ans</span> <span class="prices__item-value">.' . $montant . ' &euro;</span>';
              echo '</li>';
            }

          }

            //exemple avec while :

            $compteur = 1;

            while ($compteur <= 99) {
              // les instructions entre {} sont répétées 99x

              //on calcule le montant en fonction de l'age

              if ($compteur < 14){
                //Le capitaine a moins de 14 ans --> tarif enfant
                $montant = $tarifEnfant;
              } else if ($compteur < 16 || $compteur > 60) {
                //Le capitaine a moins de 16 ans ou plus de 60 ans --> tarif réduit
                $montant = $tarifReduit;
              } else {
                //sinon --> tarif plein
                $montant = $tarifPlein;
              }

              //si on veut afficher 1 an
              if ($compteur == 1) {
              echo '<li class="prices__item">';
              echo '<span class="prices__item-desc">' . $compteur .' an</span> <span class="prices__item-value">' . $montant . ' &euro;</span>';
              echo '</li>';
            } else {


              ?>

              <li class="prices__item">
              <span class="prices__item-desc"><?php echo $compteur ?> ans</span> <span class="prices__item-value"><?= $montant ?> &euro;</span>
              </li>

              <?php
            
            }
            // on incrémente notre boucle :
            $compteur++;

          }


            //* la balise <?= Short Echo Tag permet de faire un echo rapide dans un tag php, version raccouci du : <?php echo


            ?>

          </ul>
        </div>
      </div>

    </section>
    <section>
      <h2>Consommations</h2>


      <?php
// [...]
$extras = [
  [
    'Popcorn',
    'L',
    2.9
  ],
  [
    'Popcorn',
    'XL',
    4
  ],
  [
    'Chips',
    '50g',
    2.5
  ],
  [
    'M&M\'s',
    '100g',
    4
  ],
  [
    'Soda',
    '33cl',
    3.2
  ],
  [
    'Evian',
    '33cl',
    3
  ]
];
?>
<ul>
<?php
      
     
      


 for ($u=0; $u < 6; $u++){ 
      $conso = $extras[$u];
      $nomConso = $conso[0];
      $tailleConso = $conso[1];
      $tarifConso = $conso[2];
      

echo "<li>$nomConso $tailleConso $tarifConso €.</li>"; }
?>








</ul>


    </section>
  </main>

<!-- Footer -->
<?php include('footer.php'); ?>

</body>
</html>
