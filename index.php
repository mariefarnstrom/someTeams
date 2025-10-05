<?php

require __DIR__.'/header.php';
require __DIR__.'/data.php';
?>

<section>
    <?php foreach ($teams as $teamName => $team):
        ?>
        <div>
            <img class="teamLogo" src="<?= $team['logo']; ?>" alt="<?= $teamName?> logotype" >
            <br>
            <a href=""> <?= $teamName;?></a>
        </div>    
        <?php endforeach
    ?>
</section>




<?php

require __DIR__.'/footer.php';
