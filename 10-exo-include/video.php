<?php 
$title = 'video';
require 'partials/header.php'; 
?>

<main class="flex-shrink-0">
    <div class="container">
        <?php require '/laragon/www/php/04-superglobales/video.php' ?>
    </div>

    <div class="container">
        <button onclick="window.location.href='videos.php'">Retour</button>
    </div>
</main>

<?php require 'partials/footer.php'; ?>