<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Boucle - exo 2</title>
</head>

<body>
    <h4>1. Créer une boucle qui affiche 10 étoiles</h4>
    <h4>2. Imbriquer la bouche dans une autre boucle afin d'afficher 10 lignes de 10 étoiles</h4>
    <h4>3. Nous obtenons un carré. Trouver un moyen de modifier le code pour obtenir un triangle rectangle</h4>

    <?php for ($i = 0; $i < 10; $i++) { ?>
        <?=  "*"; ?>
        <?php for ($j = 0; $j < $i; $j++) { ?>
            <?= "*"; ?> 
        <?php } ?> <br>
    <?php } ?>
</body>

</html>