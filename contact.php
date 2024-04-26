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

<!DOCTYPE html>
<html lang="<?= $lang ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $trad['nav']['contactme'] ?></title>
    <link rel="stylesheet" href="/assets/css/styles.css">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/initials.svg"/>

    <script src="assets/js/validation.js" type="module"></script>
    <script src="assets/js/script.js" type="module"></script>
</head>
<body>
    <?php require_once "assets/templates/nav.php";?>

    <main>
        <form action="assets/php/form.php" method="post" novalidate>
            <h1><?= $trad['form']['title'] ?></h1>

            <label for="user_fname"><?= $trad['form']['fname'] ?></label>
            <input type="text" id="user_fname" name="user_fname"/>

            <label for="user_lname"><?= $trad['form']['lname'] ?></label>
            <input type="text" id="user_lname" name="user_lname"/>

            <label for="email"><?= $trad['form']['email'] ?></label>
            <input type="email" id="email" name="email"/>

            <label for="message"><?= $trad['form']['message'] ?></label>
            <textarea id="message" name="message"></textarea>

            <button type="submit"><?= $trad['form']['send'] ?></button>
        </form>
    </main>

    <?php require_once "assets/templates/footer.php";?>
</body>
</html>