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

$film = [
    $matrix = new Movie('Matrix', 'Azione', 2.15),
    $it = new Movie('It', 'Horror', 1.52),
    $titanic = new Movie('Titanic', 'Drammatico', 2.30),
    $as = new Movie('American Sniper', 'Azione', 1.42)
];

/* var_dump($matrix, $it);

var_dump($matrix->getTitle(), $it->getTitle()); */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>

<body>
    <?php foreach ($film as $item) : ?>
    <h1><?php echo $item->getTitle(); ?></h1>
    <p>Genere: <?php echo $item->genere; ?></p>
    <p>Durata: <?php echo $item->durata; ?></p>
    <?php endforeach ?>
</body>

</html>