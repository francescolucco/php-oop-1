<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d’istanza che abbiamo visto stamattina e create un file `index.php` in cui:
- è definita una **classe ‘Movie’**
   => all’interno della classe sono dichiarate delle **variabili d’istanza**
   => all’interno della classe è definito **un costruttore**
   => all’interno della classe è definito almeno **un metodo**
- vengono **istanziati almeno due oggetti ‘Movie’** e stampati a schermo i valori delle relative proprietà
- BONUS: creare un file “database” contenente una lista di film che poi vengono istanziati in un ciclo -->

<?php

require_once __DIR__."/db.php";
require_once __DIR__."/movie.php";

var_dump($movies);



?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <?php foreach($movies as $movie): 
      $new_movie = new Movie($movie['titolo'], $movie['genere']);
      $new_movie->genere = $movie['genere'];
      $new_movie->durata = $movie['durata'];
      $new_movie->anno_produzione = $movie['anno_produzione'];
      $new_movie->voto_MYmovies = $movie['voto_MYmovies'];
      ?>
   <div>
      <h1><?php echo $new_movie->titolo; ?></h1>
      <p>Genere: <strong><?php echo $new_movie->genere; ?></strong></p>
      <p>Durata: <strong><?php echo $new_movie->durata; ?> minuti</strong></p>
      <p>Anno di produzione: <strong></strong><?php echo $new_movie->anno_produzione; ?></p>
      <p>Voto su MVBD: <strong><?php echo $new_movie->voto_MYmovies; ?></strong></p>
      <p><strong><?php echo $new_movie->getGiudizioCritica(); ?></strong></p>
   </div>
   <?php endforeach; ?>
</body>
</html>