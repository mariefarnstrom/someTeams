<?php
require __DIR__ . '/data.php';
require __DIR__ . '/header.php';
$teamName = rawurldecode($_GET['team']);
$team = $teams[$teamName];
?>

<section class="infoPage">
    <div class="logoDiv">
        <h1 class="teamName"><?= $teamName ?></h1>
        <img class="bigLogo" src="<?= $team['logo'] ?>" alt="Team logotype">
    </div>
    <div class="infoDiv">
        <div class="infoFrame">
            <div class="teamInfo">
                <h1>Team info</h1>
                <p>Home town: <?= $team['city'] ?></p>
                <p>League: <?= stripslashes($team['league']); ?></p>
                <p>UEFA coefficient ranking: <?= $team['uefa-coefficient-ranking'] ?></p>
                <p>Official <a href="<?= $team['url']?>">website</a></p>
            </div>


            <div class="opponents">
                <h1>Opponents</h1>
                <ul>
                    <?php
                    foreach ($team['opponents'] as $opponent): ?>
                        <li><?= $opponent ?></li>
                    <?php endforeach
                    ?>
                </ul>
            </div>
        </div>
    </div>
</section>