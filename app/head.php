<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Portfolio | Clara Foggetti</title>

    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta property="og:description" content="" />
    <meta property="og:image" content="http://" />

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="nav-icon.png">

    <!-- CDN -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

    <!-- LOCAL CSS -->
    <?php

    if(strpos($_SERVER['REQUEST_URI'], 'pages') !== false) {

            echo '<link rel="stylesheet" href="../../dist/styles/styles.min.css" type="text/css" media="screen">';

        } elseif(strpos($_SERVER['REQUEST_URI'], '/') !== false) {

            echo '<link rel="stylesheet" href="./dist/styles/styles.min.css" type="text/css" media="screen">';

        }
    ?>

    <!-- SCRIPT -->
</head>


<body>
    <header>
        <nav>
            <div class="bloc-left">
                <?php
                    if(strpos($_SERVER['REQUEST_URI'], 'pages') !== false) {

                        echo '<a href=""><img src="../../src/images/header/logo.png" alt=""></a>';

                    } elseif(strpos($_SERVER['REQUEST_URI'], '/') !== false) {

                        echo '<a href=""><img src="./src/images/header/logo.png" alt=""></a>';

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

                        echo '                    <ul>
                        <li><a href="../../#section-2">Work</a></li>
                        <li><a href="../../pages/about">About</a></li>
                        <li><a href="mailto:clara.foggetti@hetic.net" class="contact">Contact</a></li>
                    </ul>';

                    } elseif(strpos($_SERVER['REQUEST_URI'], '/') !== false) {

                        echo '<ul>
                        <li><a href="#section-2">Work</a></li>
                        <li><a href="pages/about">About</a></li>
                        <li><a href="mailto:clara.foggetti@hetic.net" class="contact">Contact</a></li>
                    </ul>';

                    }
                    ?>
                </div>
            </div>
        </nav>
    </header>

