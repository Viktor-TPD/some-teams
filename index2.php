<!-- header goes here -->
<?php include_once __DIR__ . "/header.php"; ?>
<body>
 <div class="master_container">

     <div class="logo_container">
         <?php foreach ($teams as $team => $teamName):
        ?> 
        <div class="logo_item">
            <img src="<?= $teamName['logo']; ?>" alt="<?= $team ?>'s logo.">
        </div>
        <?php endforeach; ?>
    </div>    
    <div class="article_container">
        
        <?php foreach ($teams as $team => $teamName):
    ?><article>
        <div class="article_item">
            <section>
                <h1><?= $team; ?></h1>
            </section>
        </div>
        <div class="article_item">  
            <section>
                <h3>LEAGUE: </h3> <p><?= $teamName['league']; ?></p>
            </section>
        </div>
        <div class="article_item">
            <section>
                <h3>GROUP: </h3> <p><?= $teamName['group']; ?></p>
            </section>
        </div>
        <div class="article_item">
            <section>
                <h3>UEFA COEFFICENT RANKING: </h2> <p><?= $teamName['uefa-coefficient-ranking']; ?></p>
            </section>
        </div>
        <div class="article_item">
            <section>
                <h3>CITY: </h3> <p><?= $teamName['city']; ?></p>
            </section>
        </div>
        <div class="article_item">
            <section>
                <p><?= $teamName['url'] ?></p>
            </section>
        </div>
    </article>
    <?php endforeach; ?>
</div>
</div>   

<!-- footer goes here -->
<?php include_once __DIR__ . "/footer.php"; ?>