<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converson euro bitcoin</title>
</head>

<body>
    <form action="" method="post">
        <?php
        $euro = $_POST['eurovalue']  ?? null;
        ?>

        <div>
            <label for="euro">Valeur</label>
            <input type="number" name="eurovalue" id="euro" value=<?= $euro ?>>
        </div>

        <div>
            <label for="operatorid">Conversion</label>
            <select name="operator" id="operatorid">
                <?php for ($i = 0; $i <= 1; $i++) { ?>
                    <option value="<?= $i ?>">
                        <?= $i; ?>
                    </option>
                <?php } ?>
            </select>
        </div>

        <button>Convertir</button>

        <?php
        $operator = $_POST['operator'];
        $bitcoin = 27_826.59;

        switch ($operator) {
            case 0:
                $calcul = $euro * $bitcoin;
                break;

            case 1:
                $calcul = $euro / $bitcoin;
                break;
        }
        ?>

        <p>Résultat conversion : <?= $calcul ?></p>
    </form>
</body>

</html>
