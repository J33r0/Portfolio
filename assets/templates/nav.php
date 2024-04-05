<nav>
        <a href="/?lang=<?= $lang ?>" title="Go to home page">
            <img src="assets/img/logo2-white.svg" alt="logo" aria-hidden="true"/>
        </a>

        <div></div>

        <section>
            <ul>
                <li>
                    <a href="/?lang=<?= $lang ?>"><?= $trad['nav']['home'] ?></a>
                </li>
                <li>
                    <a href="/?lang=<?= $lang ?>#projects"><?= $trad['nav']['projects'] ?></a>
                </li>
                <li>
                    <a href="/?lang=<?= $lang ?>#aboutme"><?= $trad['nav']['aboutme'] ?></a>
                </li>
                <li>
                    <a href="contact.php?lang=<?= $lang ?>"><?= $trad['nav']['contactme'] ?></a>
                </li> 

                <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="get">
                    <select name="lang">
                        <option value="en" <?= $lang === 'en' ? 'selected' : '' ?>>English</option>
                        <option value="fr" <?= $lang === 'fr' ? 'selected' : '' ?>>Français</option>
                        <option value="es" <?= $lang === 'es' ? 'selected' : '' ?>>Español</option>
                    </select>
                    <?php if (isset($_GET['id'])): ?>
                        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                    <?php endif; ?>     
                </form>
            </ul>
        </section>
    </nav>