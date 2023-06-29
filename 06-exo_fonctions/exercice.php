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

</body>

</html>