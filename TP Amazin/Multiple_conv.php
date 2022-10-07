<?php

include 'TP_AMAZIN.php';

class CD extends ProductAudio{
    private bool $_aSystemAnticopie;

    /**
     * @return bool
     */
    public function isASystemAnticopie(): bool
    {
        return $this->_aSystemAnticopie;
    }

    /**
     * @param bool $aSystemAnticopie
     */
    public function setASystemAnticopie(bool $aSystemAnticopie): void
    {
        $this->_aSystemAnticopie = $aSystemAnticopie;
    }


    public function order()
    {
        // TODO: Implement order() method.
    }

    public function Listen()
    {
        // TODO: Implement Listen() method.
    }
}

class MP3 extends ProductAudio implements Downloadable {

    private string $_formatEncode;

    /**
     * @return string
     */
    public function getFormatEncode(): string
    {
        return $this->_formatEncode;
    }

    /**
     * @param string $formatEncode
     */
    public function setFormatEncode(string $formatEncode): void
    {
        $this->_formatEncode = $formatEncode;
    }


    public function download()
    {
        // TODO: Implement download() method.
    }

    public function order()
    {
        // TODO: Implement order() method.
    }

    public function Listen()
    {
        // TODO: Implement Listen() method.
    }
}

class DVD extends ProductVideo{

    private int $_nbDisk;

    public function order()
    {
        // TODO: Implement order() method.
    }
}

class VOD extends ProductVideo implements Downloadable {
    public function download()
    {
        // TODO: Implement download() method.
    }

    public function order()
    {
        // TODO: Implement order() method.
    }
}

class Ebook extends Livre implements Downloadable {
    public function download()
    {
        // TODO: Implement download() method.
    }
}
