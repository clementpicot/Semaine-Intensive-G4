<?php
/**
 * Created by PhpStorm.
 * User: alisonsayarath
 * Date: 18/05/2017
 * Time: 11:19
 */

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" type="text/css" href="assets/stylesheets/screen.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>


<body class="public" id="boutique">

<header class="clearfix">
    <img src="assets/img-content/header-boutique.jpg" alt="" class="header-bg">
    <h1 class="logo">
        <a href="#">
            <img src="img-layout/logo.png" alt="logo">
        </a></h1>
    <nav>
        <ul>
            <a href="#"><li>revues</li></a>
            <a href="#"><li>boutique</li></a>
            <a href="#"><li>contact</li></a>
            <a href="#"><li>connexion</li></a>
            <a href="#"><li><img src="assets/img-layout/login.svg" alt="login"></li></a>
            <a href="#"><li><img src="assets/img-layout/search.svg" alt="search"></li></a>
        </ul>
    </nav>
</header>

<main>
    <div class="breadcrumb">
        <a href="#">Accueil</a> <span>></span> <a href="#" class="active">Boutique</a>
    </div>

    <div class="actu_block clearfix">
        <h2 class="page-title">Notre boutique</h2>
    </div>

    <div class="container_table clearfix">
        <div>
            <h2>Tarifs <span class="return">pour tout abonnement</span></h2>
            <img src="img-content/tableau.svg" alt="tableau1">
        </div>

        <div>
            <h2>Tarifs <span class="return">pour tout commande</span></h2>
            <img src="img-content/tableau2.svg" alt="tableau2">
        </div>
    </div>

    <div class="container_button clearfix">
        <a href="order.html">
            <button>Commander <img src="img-content/arrow.png"></button>
        </a>
        <button>S'abonner</button>
    </div>
</main>


<div class="newsletter">
    <div class="inner-newsletter">
        <div class="blue"></div>
        <p class="slogan">Restez au courant <span class="return">de toutes nos actualités !</span></p>
        <div class="subscribe">
            <form action="#">
                <input type="email" name="email" placeholder="Votre e-mail..." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                <input type="submit" name="inscrit_newsletter" value="S'inscrire">
            </form>
        </div>
    </div>
</div>

<footer>
    <div class="inner-footer">
        <div class="navigate">
            <h3>Naviguer sur le site</h3>
            <a href="#">Nos revues</a>
            <a href="#">Contactez-nous</a>
            <a href="#">Inscription</a>
            <a href="#">Mentions Légales</a>
        </div>
        <div class="boutique">
            <h3>Notre boutique</h3>
            <a href="#">Commander</a>
            <a href="#">Nos abonnements</a>
        </div>
    </div>
</footer>
</body>
</html>
