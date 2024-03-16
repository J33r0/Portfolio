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
    <?php require_once "assets/templates/nav.php";?>

    <main>
        <form action="assets/php/form.php" method="post" >
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

        <?php
        require_once "assets/php/Comment.php";
        
        $commentObj = new Comment();

        foreach ($commentObj->getComments() as $comment) {
            ?>
        <article>
        <ul>
            <li><?php echo $comment['id'] ?></li>
            <li><?= $comment['user_fname'] ?></li>
            <li><?= $comment['user_lname'] ?></li>
            <li><?= $comment['email'] ?></li>
            <li><?= $comment['message'] ?></li>
        </ul>
        </article>
        <?php
        }
        ?>
    </main>

    <?php require_once "assets/templates/footer.php";?>
</body>
</html>