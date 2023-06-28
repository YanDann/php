<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Boucle - exo 3</title>
</head>

<body>
    <h4>1. Afficher la table de multiplication du chiffre 5</h4>

    <?php for ($i = 1; $i <= 10; $i++) { ?>
        <?php for ($j = 1; $j <= 10; $j++) { ?>
            <?php $calcul = $j * $i; ?>
            <?= "$i x $j = $calcul"; ?> <br>
        <?php } ?> <br>
    <?php } ?>
    
</body>

</html>