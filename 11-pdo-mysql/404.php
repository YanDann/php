<?php require 'partials/header.php'; ?>

<?php 

$randomMovies= db()->query("SELECT * FROM movie WHERE id = ROUND(RAND()*23) + 1")->fetchAll();
// var_dump($randomMovies);

?>
<div class=content-404>
    <h1>404 - Oups</h1>
    <p>Pour nous faire pardonner, on vous offre <?= count($randomMovies); ?> film(s) au hasard</p>
</div>

<div class="container">
    <div class="row row-gap-4 my-5">
        <?php foreach ($randomMovies as $randomMovie) {
            $idMovie = "film.php?id=" . $randomMovie["id"]; ?>
            <div class="col-lg-3">
                <div class="card">
                    <img src="data/uploads/<?= $randomMovie['cover']; ?>" class="card-img-top" alt="<?= $movie['title']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $randomMovie['title']; ?></h5>
                        <p><?= formatDate($randomMovie['released_at']); ?></p>
                        <a href="<?= $idMovie; ?>" class="btn btn-primary">Voir le film</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php require 'partials/footer.php'; ?>