<?php
$lang = 'en';

if(isset($_GET['lang']) && ($_GET['lang'] == 'es' || $_GET['lang'] == 'fr' || $_GET['lang'] == 'en')) {
    $lang = $_GET['lang'];
} else {
    if (isset($_COOKIE['lang']) && ($_COOKIE['lang'] == 'es' || $_COOKIE['lang'] == 'fr' || $_COOKIE['lang'] == 'en')) {
        $lang = $_COOKIE['lang'];
    }
}

if ($lang == 'es') {
    require_once 'assets/local/es.php';
} elseif ($lang == 'fr') {
    require_once 'assets/local/fr.php';
} else {
    require_once 'assets/local/en.php';
}
?>

<?php
    require_once 'assets/php/Project.php';
        
    $database = new Project();
    $pdo = $database->getPdo();

    $id = $_GET['id'];
    $project = $database->getProject($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <link rel="stylesheet" href="/assets/css/styles.css">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/image2vector.svg"/>

    <script src="assets/js/script.js" type="module"></script>
</head>
<body>
    <?php include "assets/templates/nav.php";?>

    <main>
        <h2><?= $project['title'] ?></h2>
        <img src="<?= $project['img_path'] ?>" alt="">
        <p><?= $project['description'] ?></p>
    </main>

    <?php include "assets/templates/footer.php";?>
</body>
</html>