<?php

$title = 'Some teams';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><? echo $title ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <section class= "top">
            <img class="football" src="football.png" alt="football">
            <h1 class="title"><?= $title ?></h1>
        </section>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
        </nav>
    </header>