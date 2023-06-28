<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ssuperglobales</title>
</head>

<body>
    <h2>Superglobales</h2>
    <?php
    // $_GET est un tableau qui contient les paramètres de l'URL
    // index.php?name=fiorella&age=3
    var_dump($_GET);

    // L'opérateur Null coalesce permet de vérifier si la valeur existe
    $name = $_GET['name'] ?? "aventurier";
    $age = $_GET['age'] ?? null;
    ?>

    <a href="index.php">Sans rien</a>
    <a href="index.php?name=fiorella&age=3">Fiorella</a>
    <a href="index.php?name=toto">Toto</a>

    <h1>Bonjour <?= $name; ?></h1>

    <?php if ($age) { ?>
        <p>Tu as <?= $age ?> ans.</p>
    <?php } ?>

    <form action="" method="get">
        <input type="text" name="name" value=<?= $name; ?>>
        <select name="age">
            <?php for ($i = 18; $i <= 120; $i++) { ?>
                <option <?= $i == $age ? 'selected' : '' ?> value="<?= $i ?>">
                    <?= $i . " ans"; ?>
                </option>;
            <?php } ?>
        </select>
        <button>Envoyer</button>
    </form>
</body>

</html>