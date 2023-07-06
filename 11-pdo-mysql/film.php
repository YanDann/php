<?php require 'partials/header.php';

$movie = db()->query('SELECT * FROM movie')->fetchAll();

// Recuperation de l'image par l'id
$searchId = 3;

foreach ($movie as $value => $film) {
    if ($value === $searchId) {
        $searchCover = $film["cover"];
        $searchTitle = $film["title"];
        $searchDuration = $film["duration"];
        $searchReleased = $film["released_at"];
        $searchDescription = $film["description"];
    }
}

// On récupère l'id des acteurs dans les films qu'ils jouent (id_movie)
$play = db()->query("SELECT id FROM joue_dans WHERE id_movie = ($searchId +1);")->fetchAll();
// On fait une jointure (liaison) entre l'id de l'acteur et l'id du film recherché
$actorsName = db()->query("SELECT name, firstname FROM actor INNER JOIN joue_dans ON actor.id=joue_dans.id WHERE id_movie = ($searchId +1);")->fetchAll();

// var_dump($actorsName);

if (count($actorsName) >= 1) {
    foreach ($actorsName as $actorName) {
        $searchActorName[] = $actorName['firstname'] . " " . $actorName['name'];
    }
} else if (!isset($searchActorName)) {
    $searchActorName = [];
}

// var_dump($searchActorName);

?>

<div class="affiche-card">
    <img src="data/uploads/<?= $searchCover ?>" class="img-fluid affiche-img" alt="...">
    <div class="film-info">
        <h1><?= $searchTitle; ?></h1>
        <p class="duration">Durée : <?= convertToHour($searchDuration); ?></p>
        <p class="release">Sortie en <span><?= getYear($searchReleased); ?></span></p>
        <p class="description"><?= $searchDescription; ?></p>
        <p class="actors">Il y a <?= count($play); ?> acteur(s) dans ce film.</p>

        <ul class="list-group">
            <?php foreach ($searchActorName as $actor) { ?>
                <li class="list-group-item"><?= $actor; ?></li>
            <?php } ?>
        </ul>
    </div>

</div>


<?php require 'partials/footer.php'; ?>