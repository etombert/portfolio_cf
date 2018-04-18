<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Clara Foggetti – Freelance Product Designer & Creative Student</title>

    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Clara Foggetti">
    <meta name="keywords" content="Web Designer, UX Designer, UI Designer, Hetic">
    <meta name="description" content="Hello, I am Clara Foggetti, a Product Designer living in Paris. I am currently a third-year student involved in HETIC, an IT school. I like resolving design problems, creating smart user interfaces and imagining useful interactions. I also like sharing ideas with people to find the best way to make great stuff.">
    <meta property="og:description" content="" />
    <meta property="og:image" content="http://" />

    <!-- FAVICON -->
    <?php

    if(strpos($_SERVER['REQUEST_URI'], 'pages') !== false) {

        echo '<link rel="shortcut icon" type="image/x-icon" href="../../nav-icon.png">';

    } elseif(strpos($_SERVER['REQUEST_URI'], '/') !== false) {

        echo '<link rel="shortcut icon" type="image/x-icon" href="nav-icon.png">';

    }
    ?>

    <!-- CDN -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

    <!-- LOCAL CSS -->
    <?php

    if(strpos($_SERVER['REQUEST_URI'], 'pages') !== false) {

            echo '<link rel="stylesheet" href="../../dist/styles/styles.min.css" type="text/css" media="screen">';
            echo '<link rel="stylesheet" href="../../dist/styles/plugins/animsition/animsition.css" type="text/css" media="screen">';

        } elseif(strpos($_SERVER['REQUEST_URI'], '/') !== false) {

            echo '<link rel="stylesheet" href="./dist/styles/styles.min.css" type="text/css" media="screen">';
            echo '<link rel="stylesheet" href="./dist/styles/plugins/animsition/animsition.css" type="text/css" media="screen">';

        }
    ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117696680-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-117696680-1');
    </script>


    <!-- SCRIPT -->
</head>


<body class="animsition" data-animsition-in-class="fade-in" data-animsition-in-duration="1000" data-animsition-out-class="fade-out" data-animsition-out-duration="800">
    <header>
        <nav>
            <div class="bloc-left">
                <?php
                    if(strpos($_SERVER['REQUEST_URI'], 'pages') !== false) {

                        echo '<a href="../../"><img src="../../src/images/header/logo.png" alt=""></a>';

                    } elseif(strpos($_SERVER['REQUEST_URI'], '/') !== false) {

                        echo '<a href="#"><img src="./src/images/header/logo.png" alt=""></a>';

                    }
                ?>
            </div>
            <div class="bloc-right">
                <div class="burger-menu">
                    <div class="burger"></div>
                </div>

                <div class="menu-list">
                    <?php
                    if(strpos($_SERVER['REQUEST_URI'], 'pages') !== false) {

                        echo '<ul>
                        <li><a href="../../#section-2" class="animsition-link" data-animsition-out-class="fade-out" data-animsition-out-duration="1000">Work</a></li>
                        <li><a href="../../pages/about" class="animsition-link" data-animsition-out-class="fade-out" data-animsition-out-duration="1000">About</a></li>
                        <li><a href="mailto:clara.foggetti@hetic.net" class="contact">Contact</a></li>
                    </ul>';

                    } elseif(strpos($_SERVER['REQUEST_URI'], '/') !== false) {

                        echo '<ul>
                        <li><a href="#section-2" class="scrollTo">Work</a></li>
                        <li><a href="pages/about" class="animsition-link" data-animsition-out-class="fade-out" data-animsition-out-duration="1000">About</a></li>
                        <li><a href="mailto:clara.foggetti@hetic.net" class="contact">Contact</a></li>
                    </ul>';

                    }
                    ?>
                </div>
            </div>
        </nav>
    </header>

