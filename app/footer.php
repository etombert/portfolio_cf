    <footer>
        <div class="bloc-content">
            <h2>I'm looking for a 4 month internship as a PRODUCT designer starting in July 2018.</h2>
        </div>
        <div class="bloc-contact">
            <ul>
                <li><a href="https://www.linkedin.com/in/clarafoggetti/" target="_blank">Linkedin</a></li>
                <li>Available for freelance</li>
                <li>+33 (0)6 73 69 32 08</li>
            </ul>
        </div>
    </footer>

    <script>
        $(document).ready(function() {
            $(".animsition").animsition({
                inClass: 'fade-in',
                outClass: 'fade-out',
                inDuration: 1500,
                outDuration: 800,
                linkElement: '.animsition-link',
                // e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
                loading: true,
                loadingParentElement: 'body', //animsition wrapper element
                loadingClass: 'animsition-loading',
                loadingInner: '', // e.g '<img src="loading.svg" />'
                timeout: false,
                timeoutCountdown: 5000,
                onLoadEvent: true,
                browser: [ 'animation-duration', '-webkit-animation-duration'],
                // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
                // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
                overlay : false,
                overlayClass : 'animsition-overlay-slide',
                overlayParentElement : 'body',
                transition: function(url){ window.location.href = url; }
            });
        });

        /*$(document).ready(function(){
            // Parallax
            $('.parallax-window').parallax({imageSrc:
                '../../src/images/trendee/IMG-footer-trendee.png',
                '../../src/images/pocketcare/IMG-footer-Pocketcare.png',
                '../../src/images/oruro/IMG-footer-Oruro.png',
                '../../src/images/cafe_arabe/IMG-footer-Cafe.png',
                '../../src/images/mandala/IMG-footer-Mandala.jpg'
            });
        });*/
    </script>

    <?php
    if(strpos($_SERVER['REQUEST_URI'], 'pages') !== false) {

        echo '<script type="text/javascript" src="../../dist/scripts/main.js"></script>';
        echo '<script type="text/javascript" src="../../dist/scripts/parallax.min.js"></script>';
        echo '<script type="text/javascript" src="../../dist/scripts/animsition.min.js"></script>';

    } elseif(strpos($_SERVER['REQUEST_URI'], '/') !== false) {

        echo '<script type="text/javascript" src="./dist/scripts/main.js"></script>';
        echo '<script type="text/javascript" src="./dist/scripts/parallax.min.js"></script>';
        echo '<script type="text/javascript" src="./dist/scripts/animsition.min.js"></script>';

    }
    ?>

    </body>
</html>
