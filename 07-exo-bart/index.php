<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo - Bart</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=VT323&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    $iteration = 10;

    $tabSentence = [
        "Je dois répéter cette phrase $iteration fois !",
        "Recopier $iteration fois : je ne dois pas skater sur la voiture de Seymour",
        "Vive le PhP ! $iteration fois !!",
        "Je dois faire mes dévoirs, à recopier $iteration fois...",
        "Ne pas oublier de mettre son révéil le matin, sinon j'aurais $iteration punitions !",
        "Je prefererais gagner $iteration fois au loto que de recopier cette phrase $iteration fois...",
    ];

    $test = rand(0, (count($tabSentence) - 1));
    $sentence = $tabSentence[$test];
    ?>

    <main>
        <?php
        for ($i = 0; $i < $iteration; $i++) {
            echo "<p>$sentence</p>";
        }
        ?>
        <img src="./bart.png" alt="bart" class="bart">
    </main>

</body>

</html>