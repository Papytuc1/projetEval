<?php
class ClassConnexion
{
   static $bdd;
   public function __construct()
   {
      try {
         self::$bdd = new PDO('mysql:host=localhost;dbname=mediateque;charset=utf8', 'root', '', null);
      } catch (Exception $e) {
         die('Erreur : ' . $e->getMessage());
      }
   }
}


