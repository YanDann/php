<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Boucle - exo 4</title>
    <link rel="stylesheet" href="styleexo4.css">
</head>

<body>
    <main>
        <?php for ($i = 0; $i <= 10; $i++) { ?>
            <span><?= 0; ?></span>
            <?php for ($j = 1; $j <= 10; $j++) { ?>
                <span class="column"><?= $i * $j; ?></span>
            <?php } ?> <br>
        <?php } ?>
    </main>
</body>

</html>