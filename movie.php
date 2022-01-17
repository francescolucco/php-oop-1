<?php

require_once __DIR__."/db.php";

class Movie {
   public $titolo;
   public $genere;
   public $durata;
   public $anno_produzione;
   public $voto_MYmovies;


   function __construct($_titolo, $_genere)
   {
      $this->titolo = $_titolo;
      $this->genere = $_genere;
   }

   public function getGiudizioCritica(){
      $giudizioCritica = 'Candidato al NOBEL';
      if($this->voto_MYmovies <= 8.5){
         $giudizioCritica = 'Candidato a CANNES';
      }
      return $giudizioCritica;
   }


}

?>