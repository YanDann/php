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
    $iteration = $_GET['iteration'] ?? 10;

    $tabSentence = [
        "Je dois répéter cette phrase $iteration fois !",
        "Recopier $iteration fois : je ne dois pas skater sur la voiture de Seymour",
        "Vive le PhP ! $iteration fois !!",
        "Je dois faire mes dévoirs, à recopier $iteration fois...",
        "Ne pas oublier de mettre son révéil le matin, sinon j'aurais $iteration punitions !",
        "Je prefererais gagner $iteration fois au loto que de recopier cette phrase $iteration fois...",
    ];

    $test = rand(0, (count($tabSentence) - 1));
    $sentence = $_GET['sentence'] ?? $tabSentence[$test];
    ?>
    <header>
        <form action="" method="get">
            <label for="asksentence">Quelle phrase doit recopier Bart ?</label>
            <br>
            <input type="text" name="sentence" id="asksentence" value="<?= $sentence ?>">
            <br>
            <label for="askiteration">Combien de fois doit-il recopier la phrase ?</label>
            <br>
            <select name="iteration" id="askiteration">
                <?php for ($i = 0; $i <= 100; $i++) { ?>
                    <option <?= $iteration == $i ? 'selected' : '' ?> value="<?= $i ?>">
                        <?= $i ?>
                    </option>
                <?php } ?>
            </select>
        </form>
    </header>

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