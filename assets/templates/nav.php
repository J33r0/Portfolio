<nav>
        <a href="/" title="Go to home page">
            <img src="assets/img/image2vector.svg" alt="logo" aria-hidden="true"/>
        </a>

        <div></div>

        <section>
            <button onclick="location.reload()">
                <svg version="1.1" id="_x32_" viewBox="0 0 512 512"  xml:space="preserve">
                    <g>
                        <path fill="currentColor" class="st0" d="M256,118.125c-76.156,0-137.875,61.719-137.875,137.875S179.844,393.875,256,393.875S393.875,332.156,393.875,256S332.156,118.125,256,118.125z"/>
                        <rect fill="currentColor" x="235.906" class="st0" width="40.156" height="77.297"/>
                        <rect fill="currentColor" x="235.906" y="434.703" class="st0" width="40.156" height="77.297"/>
                        <rect fill="currentColor" x="63.657" y="82.229" transform="matrix(0.7071 0.7071 -0.7071 0.7071 102.3047 -42.376)" class="st0" width="77.296" height="40.15"/>
                        <polygon fill="currentColor" class="st0" points="368.156,396.547 422.828,451.219 451.219,422.813 396.563,368.156 	"/>
                        <rect fill="currentColor" y="235.906" class="st0" width="77.281" height="40.156"/>
                        <polygon fill="currentColor" class="st0" points="434.688,235.922 434.688,276.078 512,276.063 512,235.906 	"/>
                        <polygon fill="currentColor" class="st0" points="60.781,422.813 89.156,451.219 143.813,396.547 115.438,368.156 	"/>
                        <polygon fill="currentColor" class="st0" points="451.219,89.156 422.813,60.781 368.156,115.438 396.563,143.844 	"/>
                    </g>
                </svg>
            </button>

            <ul>
                <a href="/">
                    <li><?= $trad['nav']['home'] ?></li>
                </a>
                <a href="/#projects">
                    <li><?= $trad['nav']['projects'] ?></li>
                </a>
                <a href="/#aboutme">
                    <li><?= $trad['nav']['aboutme'] ?></li>
                </a>
                <a href="contact.php">
                    <li><?= $trad['nav']['contactme'] ?></li>
                </a>
                <a href="?lang=<?= $lang === 'fr' ? 'en' : 'fr' ?>"><?= $trad['nav']['changeLang'] ?></a></li>


            </ul>
        </section>
    </nav>