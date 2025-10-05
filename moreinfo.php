<?php

require __DIR__.'/header.php';
$teamName = rawurldecode($_GET['team']);
?>
<h1><?= $teamName?></h1>