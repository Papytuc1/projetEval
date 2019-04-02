<?php
class ModeleLivre extends ClassConnexion{

    public function listLivre()
    {
        $array = [];
        $req = parent::$bdd->query("SELECT
        books.id,
        title,
        author,
        resume,
        price,
        stock,
        publish_date,
        img,
        genre
    FROM
        `books`
    JOIN book_has_genres ON books.id = book_has_genres.id_books
    JOIN genres ON genres.id = book_has_genres.id_genres"); 
        while ($donnees = $req->fetch()) {
            $livre = new ClassLivre();
            $livre->setId($donnees["id"]);
            $livre->setTitle($donnees["title"]);
            $livre->setAuthor($donnees["author"]);
            $livre->setResume($donnees["resume"]);
            $livre->setPrice($donnees["price"]);
            $livre->setPublishingDate($donnees["publish_date"]);
            $livre->setImg($donnees["img"]);
            $livre->setGenre($donnees["genre"]);
            array_push($array,$livre);
        }
        return $array;
    }

}