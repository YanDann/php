<?php

require 'vendor/autoload.php';

use App\Calculator;
use App\Car;
use App\Cat;
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

<?php  // ---------------------------------------------------------------  
?>

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
echo $s->isBiggerThen($r);

// Exo calculatrice
$c = new Calculator();
$c->add(10)->substract(4);
$c->multiply(2)->divide(4);
?>

<p>Le résultat de 10 - 4 * 2 / 4 est = <?= $c->result(); ?></p>