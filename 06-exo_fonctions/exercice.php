<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo fonctions</title>
</head>

<body>

    <?php
    require 'functions.php';
    ?>
    <h1>Exercices fonctions</h1>

    <h2>Créer une fonction calculant le carré d'un nombre</h2>
    <p>Carré de 2 => <?= square(2); ?></p>

    <h2>Créer une fonction calculant l'aire d'un rectangle et une fonction pour celle d'un cercle</h2>
    <p>Air d'un rectangle, 2 de longueur et 4 de largeur => <?= airRectangle(2, 4) ?></p>
    <p>Air d'un cercle d'un rayon de 4 => <?= airCircle(4) ?></p>

    <h2>Créer une fonction calculant le prix TTC d'un prix HT. Nous aurons besoin de 2 paramètres, le prix HT et le taux.</h2>
    <p>Prix TTC de 25€ avec un taux de 22% => <?= priceTTC(25, 22) ?></p>

    <h2>Ajouter un 3ème paramètre à cette fonction permettant de l'utiliser dans les 2 sens (HT vers TTC ou TTC vers HT)</h2>
    <p><?= priceTTCtoHT(25, 22, true) ?></p>
    
    <h2>Nous cherchons à afficher la date du jour au format "Tuesday 16 february 2021, il est 10h51 et 12 secondes". Cherchez sur Google la fonction PHP permettant de faire cela. Comment choisir le format de la date ?</h2>
    <p><?= translate(date('l d F Y')).', il est '.date('H\h i \e\t s').' secondes'; ?></p>
    <p><?= date('d/m/yy'); ?>, il est <?= date('H'); ?>H<?= date('i'); ?> et <?= date('s') ?> secondes</p>

    <h2>Nous voulons récupérer le jour qu'il sera dans 10 jours exactement. Pensez que strtotime renvoie un timestamp.</h2>
    <p>Dans 10 jours nous serons <?= translate(date('l', strtotime("+10 days"))); ?></p>

    <h2>Combien de jours reste-t-il avant Noël ?</h2>
    <?php 
        $christmas = strtotime('25 December'); 
        $now = time();
        $days = ($christmas - $now) / (60 * 60 * 24);
    ?>
    <p>Noël est dans <?= floor($days) ?> jours</p>

</body>

</html>
