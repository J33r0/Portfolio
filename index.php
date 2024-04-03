<?php
$lang = 'en';

if (isset($_GET['lang'])) {
    if ($_GET['lang'] == 'es' || $_GET['lang'] == 'fr' || $_GET['lang'] == 'en') {
        setcookie(
            'lang',
            $_GET['lang'],
            time() + 60 * 60 * 24 * 365,
            '',
            '',
            true,
            true
        );
        $lang = $_GET['lang'];
    }
} else {
    if (isset($_COOKIE[$lang]) && ($_COOKIE[$lang] == 'es' || $_COOKIE[$lang] == 'fr' || $_COOKIE[$lang] == 'en')) {
        $lang = $_COOKIE[$lang];
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


<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <title>Jeronimo Herdoiza</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/image2vector.svg"/>
    <script src="assets/js/script.js" type="module"></script>
    <script src="assets/js/ajax.js" type="module"></script>
</head>
<body>
    <?php require_once "assets/templates/nav.php";?>

    <main>
        <section>
            <h1><?= $trad['main']['im'] ?> <span><?= $trad['main']['jh'] ?></span></h1>
            <h1><?= $trad['main']['future'] ?></h1>
        </section>

        <section id="projects">
            <h2><?= $trad['main']['projects'] ?></h2>
            <section>
                <div></div>
                <article></article>
                <article></article>
                <div></div>
                <div></div>
                <article></article>
                <article></article>

            </section>
            <button>See more</button>
        </section>

        <section id="aboutme">
            <h2><?= $trad['main']['aboutme'] ?></h2>
            <p><?= $trad['main']['p1'] ?></p> 
            <p><?= $trad['main']['p2'] ?></p>

            <button>
                <a href="contact.php?lang=<?= $lang ?>"><?= $trad['nav']['contactme'] ?></a>
            </button>
        </section>
    </main>

    <?php require_once "assets/templates/footer.php";?>
    
</body>
</html>