<?php require 'partials/header.php'; ?>

<?php 
// Recuperation des categories de film
$cat = db()->query('SELECT id, name FROM category')->fetchAll();

// Création des variables qu'on récupère du formulaire à injecter ultérieurement
$title = $_POST['title'] ?? null;
$release = $_POST['released_at'] ?? null;
$comment = $_POST['description'] ?? null;
$duration = $_POST['duration'] ?? null;
$cover = $_POST['cover'] ?? null;
$category = $_POST['category'] ?? null;

// Tableau vide à injecter
$movie = [
    'title' => $title,
    'released_at' => $release,
    'comment' => $comment,
    'duration' => $duration,
    'cover' => $cover,
    'category' => $category,
];

var_dump($movie);

?>

<div class="containerAdd">
    <form class="container" method="post">
        <div class="mb-3">
            <label for="title" class="form-label">Titre</label>
            <input type="text" class="form-control" name="title" id="title" value="<?= $title; ?>">
        </div>
        <div class="mb-3">
            <label for="released_at" class="form-label">Date de sortie</label>
            <input type="text" class="form-control" name="released_at" id="released_at" value="<?= $release; ?>">
        </div>

        <div class="mb-3">
            <label for="description">Comments</label>
            <div class="form-floating">
                <textarea class="form-control" name="description" id="description" style="height: 100px"><?= $comment; ?></textarea>
            </div>
        </div>

        <div class="mb-3">
            <label for="duration" class="form-label">Durée</label>
            <input type="text" class="form-control" name="duration" id="duration" value="<?= $duration; ?>">
        </div>
        <div class="mb-3">
            <label for="cover" class="form-label">Cover</label>
            <input type="text" class="form-control" name="cover" id="cover" value="<?= $cover; ?>">
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Categorie</label>
            <select class="form-select" name="category" id="category" aria-label="Default select example">
                <option selected disabled>Choisissez une categorie</option>
                <?php for ($i = 0; $i < count($cat); $i++) {?>
                    <option <?= $category == $cat[$i]['name'] ? 'selected' : '' ?> value="<?= $cat[$i]['name']; ?>">
                    <?= $cat[$i]['name']; ?>
                    </option>
                <?php } ?>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php require 'partials/footer.php'; ?>