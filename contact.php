<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <link rel="stylesheet" href="/assets/css/styles.css">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/image2vector.svg"/>
</head>
<body>
    <?php include "assets/templates/nav.php";?>

    <main>
        <form action="assets/php/form.php" method="post" >
            <label for="user_name">Your name:</label>
            <input type="text" id="user_name" name="username"/>

            <label for="email">Your e-mail:</label>
            <input type="email" id="email" name="email"/>

            <label for="message">Your message:</label>
            <textarea id="message" name="message"></textarea>

            <button type="submit"> Send your message</button>
        </form>

        <?php
        $pdo = new PDO("sqlite:" . __DIR__ . "/assets/php/database.sqlite");
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $comments = $pdo->query("SELECT * FROM message")
                        ->fetchAll();

        foreach ($comments as $comment) {
            ?>
        <article>
        <ul>
            <li><?php echo $comment['id'] ?></li>
            <li><?= $comment['username'] ?></li>
            <li><?= $comment['email'] ?></li>
            <li><?= $comment['message'] ?></li>
        </ul>
        </article>
        <?php
        }
        ?>

    </main>
</body>
</html>