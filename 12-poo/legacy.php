<?php

use App\Legacy\Animal;
use App\Legacy\Cat;
use App\Legacy\Dog;
use App\Legacy\Kennel;

require 'vendor/autoload.php';

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$catA = new Cat("O'malley");
$dogA = new Dog("Pongo");

dump($catA, $dogA);
// Instanceof (Polymorphisme => le chat est aussi un animal)
dump($catA instanceof Animal);

echo $catA->move() . '<br>';
echo $dogA->move() . '<br>';

$kennel = new Kennel();
$kennel->keep($catA)
    ->keep($dogA);
dump($kennel);
