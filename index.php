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
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./style.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <title>Movies</title>
</head>
<body>
   <header class="d-flex justify-content-center align-items-center">
      <i class="fa-solid fa-film"></i>
      <i class="fa-solid fa-film"></i>
      <i class="fa-solid fa-film"></i>
      <h1 class="titolo-header">film da vedere prima di morire</h1>
      <i class="fa-solid fa-film"></i>
      <i class="fa-solid fa-film"></i>
      <i class="fa-solid fa-film"></i>
   </header>
   
<i class="fa-solid fa-video"></i>
   <?php foreach($movies as $movie): 
      $new_movie = new Movie($movie['titolo'], $movie['genere']);
      $new_movie->genere = $movie['genere'];
      $new_movie->durata = $movie['durata'];
      $new_movie->anno_produzione = $movie['anno_produzione'];
      $new_movie->voto_MYmovies = $movie['voto_MYmovies'];
      $new_movie->image = $movie['image'];
      ?>
   <div>
      <h1><?php echo $new_movie->titolo; ?></h1>
      <img src="<?php echo $new_movie->image; ?>" alt="">
      <p>Genere: <strong><?php echo $new_movie->genere; ?></strong></p>
      <p>Durata: <strong><?php echo $new_movie->durata; ?> minuti</strong></p>
      <p>Anno di produzione: <strong></strong><?php echo $new_movie->anno_produzione; ?></p>
      <p>Voto su MVBD: <strong><?php echo $new_movie->voto_MYmovies; ?></strong></p>
      <p><strong><?php echo $new_movie->getGiudizioCritica(); ?></strong></p>
   </div>
   <?php endforeach; ?>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>