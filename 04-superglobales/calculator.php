<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body>

    <?php
    $number1 = $_GET['number1'] ?? null;
    $number2 = $_GET['number2'] ?? null;

    $operators = [0, 1, 2, 3];
    ?>

    <form action="" method="get">
        <div>
            <label for="numero1">Number 1</label>
            <input type="number" name="number1" id="numero1" value=<?= $number1 ?>>
        </div>

        <div>
            <label for="numero2">Number 2</label>
            <input type="number" name="number2" id="numero2" value=<?= $number2 ?>>
        </div>

        <div>
            <label for="operatorid">Opération</label>
            <select name="operator" id="operatorid">
                <?php for ($i = 0; $i <= 3; $i++) { ?>
                    <option <?= $i == $operators[$i] ? 'selected' : '' ?> value="<?= $i ?>">
                        <?= $i; ?>
                    </option>
                <?php } ?>
            </select>
        </div>

        <button>Calculer</button>

        <?php
        $operator = $_GET['operator'] ?? 0;

        switch ($operator) {
            case 0:
                $calcul = $number1 + $number2;
                break;
            case 1:
                $calcul = $number1 - $number2;
                break;
            case 2:
                $calcul = $number1 * $number2;
                break;
            case 3:
                $calcul = $number1 / $number2;
                break;
        }
        ?>

        <p>Résultat : <?= $calcul ?></p>
    </form>
</body>

</html>
