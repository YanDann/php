<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo chaines</title>
</head>

<body>
    <?php
    require 'function.php';

    $acronyme = $_GET['name'] ?? null;
    $acronyme = htmlspecialchars($acronyme ?? '');

    $verbe = $_GET['verbe'] ?? null;
    $verbe = htmlspecialchars($verbe ?? '');
    ?>

    <h2>1. Acronyme : Créer une fonction qui prend en argument une chaine (World of Warcraft) et qui retourne les initiales de chaque mot en majuscule (WOW).</h2>
    <form action="" method="get">
        <label for="acronyme"></label>
        <input type="text" name="name" id="acronyme" value="<?= $acronyme ?>">

        <button>Trouver l'acronyme</button>

        <p>L'acronyme de <?= $acronyme ?> est <?= acronyme($acronyme) ?></p>
    </form>

    <h2>2. Conjugaison : Créer une fonction qui permet de conjuguer un verbe (chercher par exemple). Cela doit renvoyer toutes les conjugaisons au présent.</h2>
    <form action="" method="get">
        <label for="conjug"></label>
        <input type="text" name="verbe" id="conjug" value="<?= $verbe ?>">

        <button>Conjuguer</button>

        <?php if ($verbe != null) { ?>
            <?= "<p>La conjugaison du verbe $verbe est </p>" . conjug($verbe) ?>
        <?php } ?>
    </form>
</body>

</html>
