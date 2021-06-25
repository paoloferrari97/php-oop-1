<?php

class Movie
{
    public $titolo;
    public $genere;
    public $durata;

    public function __construct(string $titolo, string $genere, float $durata)
    {
        $this->titolo = $titolo;
        $this->genere = $genere;
        $this->durata = $durata;
    }

    public function getTitle()
    {
        return $this->titolo;
    }
}

$matrix = new Movie('Matrix', 'Azione', 2.15);

$it = new Movie('It', 'Horror', 1.52);

var_dump($matrix, $it);

var_dump($matrix->getTitle(), $it->getTitle());