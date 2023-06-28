<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Boucle - exo 4</title>
    <link rel="stylesheet" href="styleexo4.css">
</head>

<body>
    <main>
        <div class="x">X</div>
        <div class="horizontal">
            <?php for ($i = 0; $i <= 10; $i++) { ?>
                <span><?= $i; ?></span>
            <?php } ?>
        </div>
        <div class="vertical">
            <?php for ($i = 0; $i <= 10; $i++) { ?>
                <span><?= $i; ?></span><br>
            <?php } ?>
        </div>
        <div class="content">
            <?php for ($i = 0; $i <= 10; $i++) { ?>
                <span class="column"><?= 0; ?></span>
                <?php for ($j = 1; $j <= 10; $j++) { ?>
                    <span class="column"><?= $i * $j; ?></span>
                <?php } ?> <br>
            <?php } ?>
        </div>
    </main>
</body>

</html>