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

  <main class="main-container">
    <section>
      <h2 class="page__title">Liste des films en salles</h2>

      <?php
        //liste des films en salles :
        $listeFilms = array("Mad Max", "Harry Potter", "Titanic", "Shrek", "Princesse Mononoké");

        //echo $listeFilms; --> ne convertit le tableau en texte pour notre page

        //Autre syntaxe
        // $listeFilms = ["Mad Max", "Harry Potter", "Titanic", "Shrek", "Princesse Mononoké"];
    ?>
      
      
      <ul>
      <?php for ($i = 0; $i < count($listeFilms); $i++) : ?>
        <li><?= $listeFilms[$i] ?></li>
      <?php endfor ?>
      </ul>
<br><br><br>




<!-- -----------------------------------exo-----------------------------  -->


      <h2>Salles</h2>
      <br>

      <?php
// [...]
$rooms = [
  'Athéna',
  'Dyonisos',
  'Hadès',
  'Zeus'
]; ?>


      <ul>

        <!-- <li><?= $rooms[0]; ?></li>
        <li><?= $rooms[1]; ?></li> -->

<?php for ($i=0; $i < 4; $i++){

echo "<li>$rooms[$i]</li>"; }



?>




      </ul>














    </section>
  </main>

<!-- Footer -->
<!-- include va nous permettre d'inclure une portion de code d'un fichier sur une autre page -->
<?php include 'footer.php'; ?>

</body>
</html>
