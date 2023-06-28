<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Boucle - exo 3</title>
    <link rel="stylesheet" href="styleExo3.css">
</head>

<body>
    <div class="tableContent">
        <?php for ($i = 1; $i <= 10; $i++) { ?>
            <div class="oneTable">
                <h2>Table de <?= "$i" ?></h2>

                <?php for ($j = 1; $j <= 10; $j++) { ?>
                    <?php $calcul = $j * $i; ?>
                    <?= "$i x $j = $calcul"; ?> <br>
                <?php } ?> <br>
            </div>
        <?php } ?>
    </div>
</body>

</html>