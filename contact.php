<!DOCTYPE html>
<html lang="en">
<head><?php
$lang = 'en';

if (isset($_COOKIE['lang']) && ($_COOKIE['lang'] == 'es' || $_COOKIE['lang'] == 'fr' || $_COOKIE['lang'] == 'en')) {
    $lang = $_COOKIE['lang'];
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
    <title>Contact Me</title>
    <link rel="stylesheet" href="/assets/css/styles.css">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/image2vector.svg"/>
</head>
<body>
    <?php require_once "assets/templates/nav.php";?>

    <main>
        <form action="assets/php/form.php" method="post" >
            <h1>Fill this out to contact me!</h1>

            <label for="user_fname">Your first name:</label>
            <input type="text" id="user_fname" name="user_fname"/>

            <label for="user_lname">Your last name:</label>
            <input type="text" id="user_lname" name="user_lname"/>

            <label for="email">Your e-mail:</label>
            <input type="email" id="email" name="email"/>

            <label for="message">Your message:</label>
            <textarea id="message" name="message"></textarea>

            <button type="submit"> Send your message</button>
        </form>
    </main>

    <?php require_once "assets/templates/footer.php";?>
</body>
</html>