    <footer>
        <div class="bloc-content">
            <h2 title="I’m currently in New York where I work as Designer for Fantasy Interactive">I’m currently in New York where I work as Designer for Fantasy Interactive.</h2>
        </div>
        <div class="bloc-contact">
            <ul>
                <li><a href="https://www.linkedin.com/in/clarafoggetti/" target="_blank" class="hvr-underline-from-left">Linkedin</a></li>
                <li><a href="mailto:clara.foggetti@hetic.net" class="hvr-underline-from-left">Available for freelance</a></li>
                <li><a href="tel:+336673693208"></a>+33 (0)6 73 69 32 08</li>
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

    </script>


    <?php
    if(strpos($_SERVER['REQUEST_URI'], 'pages') !== false) {

        echo '<script type="text/javascript" src="../../dist/scripts/main.js"></script>';
        echo '<script type="text/javascript" src="../../dist/scripts/parallax-call.js"></script>';
        echo '<script type="text/javascript" src="../../dist/scripts/parallax.min.js"></script>';
        echo '<script type="text/javascript" src="../../dist/scripts/animsition.min.js"></script>';

    } elseif(strpos($_SERVER['REQUEST_URI'], '/') !== false) {

        echo '<script type="text/javascript" src="./dist/scripts/main.js"></script>';
        echo '<script type="text/javascript" src="./dist/scripts/parallax-call.js"></script>';
        echo '<script type="text/javascript" src="./dist/scripts/parallax.min.js"></script>';
        echo '<script type="text/javascript" src="./dist/scripts/animsition.min.js"></script>';

    }
    ?>

    </body>
</html>
