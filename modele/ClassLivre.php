<?php
class ClassLivre
{
    private $id;
    private $title;
    private $author;
    private $resume;
    private $price;
    private $publishingDate;
    private $img;
    private $stock;
    private $genre;

    /**
     * Get the value of id
     */ 
    public function id()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of title
     */ 
    public function title()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of author
     */ 
    public function author()
    {
        return $this->author;
    }

    /**
     * Set the value of author
     *
     * @return  self
     */ 
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get the value of resume
     */ 
    public function resume()
    {
        return $this->resume;
    }

    /**
     * Set the value of resume
     *
     * @return  self
     */ 
    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function price()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of publishingDate
     */ 
    public function publishingDate()
    {
        return $this->publishingDate;
    }

    /**
     * Set the value of publishingDate
     *
     * @return  self
     */ 
    public function setPublishingDate($publishingDate)
    {
        $this->publishingDate = $publishingDate;

        return $this;
    }

    /**
     * Get the value of img
     */ 
    public function img()
    {
        return $this->img;
    }

    /**
     * Set the value of img
     *
     * @return  self
     */ 
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get the value of stock
     */ 
    public function stock()
    {
        return $this->stock;
    }

    /**
     * Set the value of stock
     *
     * @return  self
     */ 
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }
     /**
     * Get the value of genre
     */ 
    public function genre()
    {
        return $this->genre;
    }

    /**
     * Set the value of genre
     *
     * @return  self
     */ 
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }
    public function toArray()
    {
        return ["id" => $this->id(), "title" => $this->title(), "author" => $this->author(), 
        "resume" => $this->resume(), "price" => $this->price(), 
        "publishingDate" => $this->publishingDate(),"img" =>  $this->image(), "stock" => $this->stock(), "genre" => $this->genre()];
    }

   
}

