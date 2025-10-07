<?php

require __DIR__ . '/header.php';
require __DIR__ . '/data.php';
?>

<section class="teamsView">
    <?php foreach ($teams as $teamName => $team):
    ?>
        <div class="outerFrame">
            <div class="innerFrame">
                <img class="teamLogo" src="<?= $team['logo']; ?>" alt="<?= $teamName ?> logotype">
            </div>
            <a href="moreinfo.php?team=<?=rawurlencode($teamName)?>" class="teamLink"> <?= $teamName; ?></a>
        </div>
    <?php endforeach
    ?>
</section>




<?php

require __DIR__ . '/footer.php';
