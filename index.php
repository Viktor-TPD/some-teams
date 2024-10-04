<!-- header goes here -->
<?php include_once __DIR__ . "/header.php"; ?>
<body>
    <div class="article_container">

        <?php foreach ($teams as $team => $teamName):
    ?><article>
        <h1><?= $team; ?></h1>
        <img src="<?= $teamName['logo']; ?>" alt="<?= $team ?>'s logo.">
        <p><?= $team ?> plays in the <?= $teamName['league']; ?> in group <?= $teamName['group']; ?> 
        . Their UEFA coefficent ranking is <?= $teamName['uefa-coefficient-ranking']; ?>. 
        If you're unable to see them play on their home-turf in <?= $teamName['city']?> 
        give their <a href="<?= $teamName['url'] ?>">website</a> a visit.<br>
    </article>
    <?php endforeach; ?>
</div>

<!-- footer goes here -->
<?php include_once __DIR__ . "/footer.php"; ?>




