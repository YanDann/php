<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Exercice 001</title>
</head>
<body>
    <?php
        $age = 18;
        $allowed;
        $major = "";

        if ($age >= 18) {
            $allowed = true;
        } else {
            $allowed = false;
        }

        if ($age < 18 && $age >= 16) {
            $major = "Vous êtes presque majeur";
        } else if ($age >= 14 && $age < 16) {
            $major = "Vous êtes jeune.";
        } else if ($age < 14) {
            $major = "Vous êtes trop jeune";
        } else {
            $major = "Vous êtes majeur";
        }
    ?>

    <h1><?= $major ?></h1>

    <p>Vous avez <?= $age; ?> ans.</p>

    <p><?= $allowed == true ? "Vous pouvez entrer" : "L'entrée vous est interdite"; ?> </p>

</body>
</html>