    <footer>
        <div class="bloc-content">
            <h2>I'm looking for a 4 month internship as a PRODUCT designer starting in July 2018.</h2>
        </div>
        <div class="bloc-contact">
            <ul>
                <li><a href="https://www.linkedin.com/in/clarafoggetti/" target="_blank">Linkedin</a></li>
                <li><a href="">Available for freelance</a></li>
                <li><a href="">+33 6 73 69 32 08</a></li>
            </ul>
        </div>
    </footer>

    <script>
        $(document).ready(function(){
            // Parallax
            $('.parallax-window').parallax({imageSrc:
                '../../src/images/trendee/IMG-footer-trendee.png',
                '../../src/images/pocketcare/IMG-footer-Pocketcare.png',
                '../../src/images/oruro/IMG-footer-Oruro.png',
                '../../src/images/cafe_arabe/IMG-footer-Cafe.png',
                '../../src/images/mandala/IMG-footer-Mandala.jpg'
            });
        });
    </script>

    <?php
    if(strpos($_SERVER['REQUEST_URI'], 'pages') !== false) {

        echo '<script type="text/javascript" src="../../dist/scripts/main.js"></script>';
        echo '<script type="text/javascript" src="../../dist/scripts/parallax.min.js"></script>';

    } elseif(strpos($_SERVER['REQUEST_URI'], '/') !== false) {

        echo '<script type="text/javascript" src="./dist/scripts/main.js"></script>';
        echo '<script type="text/javascript" src="./dist/scripts/parallax.min.js"></script>';

    }
    ?>

    </body>
</html>
