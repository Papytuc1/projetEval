<?php
class ModeleLivre extends ClassConnexion{

    public function listLivre()
    {
        $array = [];
        $req = parent::$bdd->query("SELECT category.name, category.id FROM `category_recipe` JOIN category ON category_recipe.id = category.id ORDER BY name"); 
        while ($donnees = $req->fetch()) {
            $livre = new ClassLivre();
            $livre->setId($donnees["id"]);
            $livre->setName($donnees["name"]);
            array_push($array,$livre);
        }
        return $array;
    }

}