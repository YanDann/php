<?php require 'partials/header.php';

$movie = db()->query('SELECT * FROM movie')->fetchAll();

// Recuperation de l'image par l'id
$searchId = 0;

foreach ($movie as $value => $film) {
    if ($value === $searchId) {
        $searchCover = $film["cover"];
        $searchTitle = $film["title"];
        $searchDuration = $film["duration"];
        $searchReleased = $film["released_at"];
    }
}

?>

<div class="affiche-card">
    <img src="data/uploads/<?= $searchCover ?>" class="img-fluid affiche-img" alt="...">
    <div class="film-info">
        <h1><?= $searchTitle; ?></h1>
        <p class="duration">Durée : <?= convertToHour($searchDuration); ?></p>
        <p class="release">Sortie en <span><?= getYear($searchReleased); ?></span></p>
    </div>

</div>


<?php require 'partials/footer.php'; ?>