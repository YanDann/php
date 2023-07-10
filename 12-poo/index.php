<?php

require 'vendor/autoload.php';

use App\Cat;

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
