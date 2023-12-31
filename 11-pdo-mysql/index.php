<?php require 'partials/header.php';

// Chercher tous les films en BDD
$movies = db()->query('SELECT * FROM movie')->fetchAll();

// var_dump($movies);

?>

<div class="container">
    <div class="row row-gap-4 my-5">
        <?php foreach ($movies as $movie) {
            //$idMovie = "film.php?id=" . $movie["id"]; ?>
            <div class="col-lg-3">
                <div class="card">
                    <img src="data/uploads/<?= $movie['cover']; ?>" class="card-img-top" alt="<?= $movie['title']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $movie['title']; ?></h5>
                        <p><?= formatDate($movie['released_at']); ?></p>
                        <a href="film.php?id=<?= $movie["id"]; ?>" class="btn btn-primary">Voir le film</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php require 'partials/footer.php'; ?>