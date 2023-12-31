<?php require 'partials/header.php'; ?>

<?php
// Recuperation des categories de film
$cat = db()->query('SELECT id, name FROM category')->fetchAll();

// Création des variables qu'on récupère du formulaire à injecter ultérieurement
$title = $_POST['title'] ?? null;
$release = $_POST['released_at'] ?? "";
$comment = $_POST['description'] ?? null;
$duration = $_POST['duration'] ?? null;
$cover = $FILES['cover'] ?? null;
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

$carracteres = 5;
$errors = [];

if (!empty($_POST)) {
    if (empty($title)) {
        $errors['title'] = "Le titre est obligatoire.";
        $validTitle = "is-invalid";
    }
    if (checkDatation($release)) {
        $errors['release_at'] = "La date n'est pas bonne.";
        $valideDate = "is-invalid";
    }
    if (strlen($comment) < $carracteres) {
        $errors['comment'] = "Il doit y avoir au moins 5 carractères.";
        $validComment = "is-invalid";
    }
    if (checkDuration($duration)) {
        $errors['duration'] = "La durée n'est pas bonne, elle doit être comprise entre 1 & 999.";
        $valideDuration = "is-invalid";
    }
    if (!isset($category)){
        $errors['category'] = "Vous devez choisir une catégorie.";
        $valideCategory = "is-invalid";
    }
    if (empty($errors)) {
        // @todo upload
        $extension = strrchr($cover['name'], '.');
        $filename = strtolower(str_replace(' ', '-', $title)).'-'.uniqid().$extension;
        move_uploaded_file($cover['tmp_name'], __DIR__.'/data/uploads/'.$filename);

        $cover = $filename;

        $success = $movie;
        $query = db()->prepare('INSERT INTO movie (title, released_at, description, duration, cover, id_category) VALUES (:title, :released_at, :description, :duration, :cover, :id_category)');
        $query->bindParam(':title', $movie['title']);
        $query->bindParam(':released_at', $movie['released_at']);
        $query->bindParam(':description', $movie['comment']);
        $query->bindParam(':duration', $movie['duration']);
        $query->bindParam(':cover', $movie['cover']);
        $query->bindParam(':id_category', $movie['category']);
        var_dump($query);
        $query->execute();
    }
}
var_dump($success);
?>

<div class="containerAdd">
    <form class="container" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="title" class="form-label">Titre</label>
            <input type="text" class="form-control <?= $validTitle; ?>" name="title" id="title" value="<?= $title; ?>">
        </div>
        <div class="mb-3">
            <label for="released_at" class="form-label">Date de sortie</label>
            <input type="text" class="form-control <?= $valideDate; ?>" name="released_at" id="released_at" value="<?= $release; ?>">
        </div>

        <div class="mb-3">
            <label for="description">Comments</label>
            <div>
                <textarea class="form-control <?= $validComment; ?>" name="description" id="description" style="height: 100px"><?= $comment; ?></textarea>
            </div>
        </div>

        <div class="mb-3">
            <label for="duration" class="form-label">Durée</label>
            <input type="text" class="form-control <?= $valideDuration; ?>" name="duration" id="duration" value="<?= $duration; ?>">
        </div>
        <div class="mb-3">
            <label for="cover" class="form-label">Cover</label>
            <input type="file" class="form-control" name="cover" id="cover" value="<?= $cover; ?>">
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Categorie</label>
            <select class="form-select <?= $valideCategory; ?>" name="category" id="category" aria-label="Default select example">
                <option selected disabled>Choisissez une categorie</option>
                <?php for ($i = 0; $i < count($cat); $i++) { ?>
                    <option <?= $category == $cat[$i]['id'] ? 'selected' : '' ?> value="<?= $cat[$i]['id']; ?>">
                        <?= $cat[$i]['name']; ?>
                    </option>
                <?php } ?>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php require 'partials/footer.php'; ?>