<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vidéo</title>
</head>

<body>
    <?php
    $videoId = $_GET['id'] ?? null;
    $src = "";
    ?>

    <form action="" method="get">
        <?php
        switch ($videoId) {
            case 1:
                $src = "https://www.youtube.com/embed/pitkROBT85o";
                break;
            case 2:
                $src = "https://www.youtube.com/embed/n6kbBhQQqqQ";
                break;
            case 3:
                $src = "https://www.youtube.com/embed/ldJXg_c7uPE";
                break;
            case 4:
                $src = "https://www.youtube.com/embed/fWJbSf9Vh8g";
                break;
        }
        ?>
    </form>

    <iframe width="560" height="315" src="<?= $src ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</body>

</html>