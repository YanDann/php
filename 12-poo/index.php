<?php
require 'vendor/autoload.php';

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

use App\Book;
use App\Calculator;
use App\Car;
use App\Cat;
use App\Library;
use App\Rectangle;
use App\Square;

$bianca = new Cat('Bianca');
$bianca->setFur('blanc')->setFur('noir');
$mina = new Cat('Mina');

dump($bianca, $mina);

?>

<h1>Mon premier chat s'apelle <?= $bianca->getName(); ?></h1>
<p>Et <?= $bianca->cry(); ?></p>
<p>
    L'autre chat est <?= $mina->getName(); ?>.
    <br>
    Et <?= $mina->cry(); ?>
</p>

<p><?= $bianca->playWith($mina); ?></p>

<?php

$audi = new Car('Red', 'Audi', 2);
$merco = new Car('Black', 'Mercedes', 4);

dump($audi, $merco);

?>

<p>La voiture <?= $audi->getModele(); ?> a <?= $audi->getWheels(); ?> roues.</p>
<p>La voiture <?= $merco->getModele(); ?> a <?= $merco->getWheels(); ?> roues.</p>

<p><?= $audi->rouler(10); ?> , <?= $audi->fillFuel(10); ?></p>
<p><?= $merco->rouler(10); ?> , <?= $merco->fillFuel(6); ?></p>

<p><?= $merco->klaxxon(); ?></p>
<p><?= $audi->klaxxon(); ?></p>

<?php  // ---------------------------------------------------------------  ?>

<?php
// Exo rectangle
$r = new Rectangle(10, 20);
echo $r->perimeter();
echo $r->area();

var_dump($r->isValid());

$r2 = new Rectangle(-10, 20);
var_dump($r2->isValid());
// Exo carré + héritage
$s = new Square(10);
echo $s->perimeter();
dump($s->isBiggerThan($r));

// Exo calculatrice
$c = new Calculator();
$c->add(10)->substract(4);
$c->multiply(2)->divide(4);
?>

<p>Le résultat de 10 - 4 * 2 / 4 est = <?= $c->result(); ?></p>

<?php  // ---------------------------------------------------------------  ?>
<?php 

$b = new Book('Harry Potter à l\'école des sorciers', 250);
echo $b->page(); // 1
$b->nextPage(); // tourne la page (ne fait rien si on est sur la dernière page)
echo $b->page(); // 2
$b->close(); // ferme le livre (reviens à la page 1)
echo $b->getName(); // Récupère le nom du livre
echo $b->countPages(); // Récupère le nombre de pages

$l = new Library();
$l->addBook($b); // Ajoute le livre b dans un tableau
$l->addBooks([ // Ajoute les livres suivant dans un tableau
    new Book('Chambre des secrets', 300),
    new Book('Prisonnier d\'Azkaban', 400),
    new Book('Coupe de feu', 500),
]);
$l->books(); // Renvoie le tableau avec tous les livres
$l->count(); // Renvoie le nombre de livre dans la bibliothèque
echo $l->count();
dump($l->books());
$l->totalPages();
echo $l->totalPages();
$b2 = $l->getBook('Coupe de feu'); // Sélectionne le livre "Coupe de feu" s'il existe (l'objet)
dump($b2);
$l->findBooksByLetter('C'); // Trouve tous les livres qui commencent par cette lettre (array_filter ?)
dump($l->findBooksByLetter('C'));
