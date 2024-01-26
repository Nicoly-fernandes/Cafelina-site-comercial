<?php
    include_once("helpers/url.php");
?>

<!DOCTYPE html>
    <html lang="pt-br">

        <head>
            <meta charset="UTF-8">
            <title> CAFELINA </title>                                       
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" type="text/css" href="<?= $BASE_URL ?>/css/reset.css">
            <link rel="stylesheet" type="text/css" href="<?= $BASE_URL ?>/css/style.css">            
        </head>

        <header>
        
            <div class="image">
                <a href="<?= $BASE_URL ?>index.php">
                <img src="<?= $BASE_URL ?>/img/7.png" alt="logo"> </a>
            </div>

            <nav>
                <ul class="navbar">
                    <li><a href="#title-container" class="nav-link" > Home </a></li>
                    <li><a href="#history" class="nav-link" > Sobre </a></li>
                    <li><a href="#menu" class="nav-li" > Menu </a></li>
                    <li><a href="#cards" class="nav-l" > Gatinhos </a></li>
                </ul>
            </nav>
        </header>