<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les fonctions</title>
</head>

<body>
    <?php 
        // Inclus le contenu du fichier functions.php
        require 'functions.php';
    ?>

    <h1><?= hello("sombre fou"); ?></h1>
    <h1><?= hello("mcnuggets", "en"); ?></h1>
    <h1><?= hello("toto", "IT"); ?></h1>
    <h1><?= hello("taz", "es"); ?></h1>

    <p>1 + 2 + 3 + 4 = <?= addition(1,2) + addition(3,4); ?></p>
    <p>1 + 2 + 3 + 4 + 5 + 6 = <?= addition(1,2,3,4,5,6); ?></p>

    <h2>Les dates</h2>
    <p>Timestamp: <?= time() ?></p>
    <p>Date: <?= date('d/m/yy H:i') ?></p>
    <p>Timestamp précis: <?= strtotime('20 march 1994') ?></p>
    <p>Date précise: <?= date(('1 d/m'), strtotime('+ 2 days')); ?></p>

</body>
</html>
