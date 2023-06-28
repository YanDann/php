<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableaux - exo 1</title>
</head>

<body>

    <h2> Afficher le nom du pays et sa capitale via un tableau </h2>

    <?php
    $capitales = [
        'France' => 'Paris',
        'Espagne' => 'Madrid',
        'Italie' => 'Rome',
    ];
    ?>

    <?php foreach ($capitales as $pays => $capitale) { ?>
        <p><?= "La capitale de $pays est $capitale" ?></p>
    <?php } ?>

    <h2> Lister les pays ayant plus de 20 millions d'habitants </h2>

    <?php
    $population = [
        'France' => 67595000,
        'Suede' => 9998000,
        'Suisse' => 8417000,
        'Kosovo' => 1820631,
        'Malte' => 434403,
        'Mexique' => 122273500,
        'Allemagne' => 82800000,
    ]
    ?>

    <?php foreach ($population as $pays => $pop) { ?>
        <?php if ($pop > 20000000) { ?>
            <li><?= "$pays avec $pop d'habitants" ?></li>
        <?php } ?>
    <?php } ?>

    <h2>Donner la population totale des pays Européens</h2>

    <?php $poptotal = 0; ?>
    <?php foreach ($population as $pop) { ?>
        <?php $poptotal += $pop ?>
    <?php } ?>
    <?= $poptotal - $population['Mexique']; ?>

    <h2>1. Afficher la liste de tous les élèves avec leur notes</h2>

    <?php
    $eleves = [
        0 => [
            'nom' => 'Matthieu',
            'notes' => [10, 8, 16, 20, 17, 16, 15, 2]
        ],
        1 => [
            'nom' => 'Thomas',
            'notes' => [4, 18, 12, 15, 13, 7]
        ],
        2 => [
            'nom' => 'Jean',
            'notes' => [17, 14, 6, 2, 16, 18, 9]
        ],
        3 => [
            'nom' => 'Enzo',
            'notes' => [1, 14, 6, 2, 1, 8, 9]
        ]
    ];
    ?>

    <div>
        <?php foreach ($eleves as $eleve) { ?>
            <ul>
                <?= $eleve['nom'] . ' à eu '; ?>
                <?php foreach ($eleve['notes'] as $note) { ?>
                    <?= $note; ?>
                <?php } ?>
            </ul>
        <?php } ?>
    </div>

    <h2>2. Calculer la moyenne de Jean. On part de $eleves[2]['notes']</h2>

    <?php $moy = 0; ?>
    <?php foreach ($eleves[2]['notes'] as $note) { ?>
        <?php $moy += $note; ?>
    <?php } ?>
    <?= 'La moyenne de ' . $eleves[2]['nom'] . ' est de ' . round($moy / count($eleves[2]['notes']), 2); ?>

    <h2>3. Combien d'élèves ont la moyenne ?</h2>

    <div>
        <?php $eleveMoyen = [] ?>
        <?php foreach ($eleves as $eleve) { ?>
            <?php $moy = 0; ?>
            <ul>
                <?php foreach ($eleve['notes'] as $note) { ?>
                    <?php $note; ?>
                <?php } ?>
                <?php foreach ($eleve['notes'] as $note) { ?>
                    <?php $moy += $note; ?>
                <?php } ?>
                <?= (round($moy / count($eleve['notes']), 2) > 10 ? $eleveMoyen[] = $eleve['nom'] . ' a la moyenne' : ' n\'a pas la moyenne'); ?>
            </ul>
        <?php } ?>
        <p>Nombre d'élèves avec la moyenne : <?= count($eleveMoyen) ?></p>
    </div>

    <h2>4. Quel(s) éléve(s) a(ont) la meilleure note ?</h2>

    <div>
        <?php $bestNote = 0; ?>
        <?php $bestStudent = '' ?>
        <?php foreach ($eleves as $eleve) { ?>
            <?php foreach ($eleve['notes'] as $note) { ?>
                <?php if ($bestNote < $note) { ?>
                    <?php $bestNote = $note; ?>
                    <?php $bestStudent = $eleve['nom'] ?>
                <?php } ?>
            <?php } ?>
        <?php } ?>
        <?= $bestNote . ' a été obtenu par ' . $bestStudent; ?>
    </div>
    <h2>5. Qui a eu au moins un 20 ?</h2>

    <div>
        <?php $perfect = false; ?>
        <?php foreach ($eleves as $eleve) { ?>
            <?php foreach ($eleve['notes'] as $note) { ?>
                <?php if ($note == 20) { ?>
                    <?php $perfect = true; ?>
                <?php } ?>
            <?php } ?>
        <?php } ?>
        <?= $perfect == true ? 'Quelqu\'un a eu 20' : 'Personne n\' eu 20' ?>
    </div>
</body>

</html>