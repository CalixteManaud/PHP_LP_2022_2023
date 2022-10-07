<?php

abstract class Product{

    protected int $_price;

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->_price;
    }

    /**
     * @param int $price
     */
    public function setPrice(int $price): void
    {
        $this->_price = $price;
    }

     abstract public function order();

}

abstract class ProductAudio extends Product{

    public function __construct(
        protected int $_Time,
        protected string $_artist,
        protected string $_Title,
    ){}


    /**
     * @return int
     */
    public function getTime(): int
    {
        return $this->_Time;
    }

    /**
     * @param int $Time
     */
    public function setTime(int $Time): void
    {
        $this->_Time = $Time;
    }

    /**
     * @return string
     */
    public function getArtist(): string
    {
        return $this->_artist;
    }

    /**
     * @param string $artist
     */
    public function setArtist(string $artist): void
    {
        $this->_artist = $artist;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->_Title;
    }

    /**
     * @param string $Title
     */
    public function setTitle(string $Title): void
    {
        $this->_Title = $Title;
    }


    abstract public function Listen();

}


abstract class ProductVideo extends Product{

    public function __construct(
        protected int $_Time,
        protected string $_Title,
        protected string $_Creator,
    ){}

    /**
     * @return int
     */
    public function getTime(): int
    {
        return $this->_Time;
    }

    /**
     * @param int $Time
     */
    public function setTime(int $Time): void
    {
        $this->_Time = $Time;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->_Title;
    }

    /**
     * @param string $Title
     */
    public function setTitle(string $Title): void
    {
        $this->_Title = $Title;
    }

    /**
     * @return string
     */
    public function getCreator(): string
    {
        return $this->_Creator;
    }

    /**
     * @param string $Creator
     */
    public function setCreator(string $Creator): void
    {
        $this->_Creator = $Creator;
    }

    public function ViewTrailer(): void
    {}
}

class Book extends Product{

    public function __construct(
        protected int $_nbPages,
        protected int $_ISBN,
    ){}

    /**
     * @return int
     */
    public function getNbPages(): int
    {
        return $this->_nbPages;
    }

    /**
     * @param int $nbPages
     */
    public function setNbPages(int $nbPages): void
    {
        $this->_nbPages = $nbPages;
    }

    /**
     * @return int
     */
    public function getISBN(): int
    {
        return $this->_ISBN;
    }

    /**
     * @param int $ISBN
     */
    public function setISBN(int $ISBN): void
    {
        $this->_ISBN = $ISBN;
    }

    public function ViewExtract(): void
    {}

    public function order()
    {
        // TODO: Implement order() method.
    }
}

interface Downloadable{
    public function download();
}

