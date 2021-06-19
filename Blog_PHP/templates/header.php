<?php
include_once("helpers/url.php");
include_once("data/categories.php");
include_once("data/posts.php");
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Aprendendo a Codar</title>
    <!-- ESTILO DO PROJETO -->
    <link rel="stylesheet" href="<?= $BASE_URL; ?>/css/style.css">
    <!-- FONTES DO PROJETO -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,700;1,300&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <a href="<?= $BASE_URL; ?>" id="logo">
            <img src="<?= $BASE_URL; ?>/img/logo.svg" alt="Blog Aprendendo a Codar">
        </a>
        <nav>
            <ul id="navbar">
                <li><a href="<?= $BASE_URL; ?>" clss="nav-link">Home</a></li>
                <li><a href="#" clss="nav-link">Categorias</a></li>
                <li><a href="#" clss="nav-link">Sobre</a></li>
                <li><a href="<?= $BASE_URL; ?>contact.php" clss="nav-link">Contato</a></li>
            </ul>
        </nav>
    </header>