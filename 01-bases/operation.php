<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Exercice 002</title>
</head>

<body>
    <?php
    $var1 = 15;
    $var2 = 5;
    $var3 = 8;

    $calcul1 = $var1 + $var2 + $var3;
    $calcul2 = $var1 * ($var2 - $var3);
    $calcul3 = round(($var3 + $var2) / $var1 , 2);

    $lessTwenty = "";

    if ($calcul1 < 20 || $calcul2 < 20 || $calcul3 < 20 ) {
        $lessTwenty = "Une des opérations renvoie moins de 20";
    }
    ?>

    <h1>Les opérations : </h1>

    <p><?= $var1 . " + " . $var2 . " + " . $var3 . " = " . $calcul1; ?></p>
    <p><?= $var1 . " x (" . $var2 . " - " . $var3 . ") = " . $calcul2; ?></p>
    <p><?= "(" . $var3 . " + " . $var2 . ") / " . $var1 . " = " . $calcul3; ?></p>

    <h2><?= $lessTwenty ?></h2>
</body>

</html>