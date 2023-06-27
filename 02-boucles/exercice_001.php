<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Boucle - exo 1</title>
</head>

<body>
    <h2>Ecrire une boucle qui affiche les nombres de 10 à 1</h2>

    <ul>
        <?php for ($i = 10; $i >= 1; $i--) { ?>
            <li>
                <?= $i; ?>
            </li>
        <?php } ?>
    </ul>

    <h2>Ecrire une boucle qui affiche uniquement les nombres pairs entre 1 et 100</h2>

    <p>
        <?php for ($i = 1; $i <= 100; $i++) { ?>
            <?php if ($i % 2 == 0) { ?>
                <?= $i; ?>
            <?php } ?>
        <?php } ?>
    </p>

    <h2>Ecrire le code permettant de trouver le PGCD de 2 nombres</h2>

    <?php
    $a = 7803;
    $b = 6540;

    $firstnumber = $a;
    $secondnumber = $b;
    ?>

    <?php while ($b != 0) { ?>
        <?php if ($a > $b) { ?>
            <?php $a = $a - $b; ?>
        <?php } else { ?>
            <?php $b = $b - $a; ?>
        <?php } ?>
    <?php } ?>
    <?= "Le PGCD entre $firstnumber & $secondnumber est $a !"; ?>

    <h2>Code le jeu du FizzBuzz</h2>

    <p>
        <?php for ($i = 1; $i <= 100; $i++) { ?>
            <?php if ($i % 3 == 0 && $i % 15 != 0) { ?>
                <?= "Fizz"; ?>
            <?php } else if ($i % 5 == 0 && $i % 15 != 0) { ?>
                <?= "Buzz"; ?>
            <?php } else if ($i % 15 == 0) { ?>
                <?= "FizzBuzz"; ?>
            <?php } else { ?>
                <?= $i; ?>
            <?php } ?>
        <?php } ?>
    </p>


</body>

</html>