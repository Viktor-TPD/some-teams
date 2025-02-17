<!-- HEADER GOES HERE -->
<?php $dynamicTitle = "⚽💨 Some Teams"; 
include_once __DIR__ . "/header.php"; ?>


<body>
    <div class="master_container">
        <!-- Logo Grid on the Left -->
        <div class="logo_container">
            <?php foreach ($teams as $team => $teamName): ?>
                <div class="logo_item">
                    <img src="<?= $teamName['logo']; ?>" alt="<?= $team; ?>'s logo.">
                </div>

                <!-- Article corresponding to the logo -->
                <div class="article_item">
                    <section>
                        <h1><?= $team; ?></h1>
                    </section>
                    <section>
                        <h3>LEAGUE: </h3> <p><?= $teamName['league']; ?></p>
                    </section>
                    <section>
                        <h3>GROUP: </h3> <p><?= $teamName['group']; ?></p>
                    </section>
                    <section>
                        <h3>UEFA COEFFICIENT RANKING: </h3> <p><?= $teamName['uefa-coefficient-ranking']; ?></p>
                    </section>
                    <section>
                        <h3>CITY: </h3> <p><?= $teamName['city']; ?></p>
                    </section>
                    <section>
                        <p><?= $teamName['url'] ?></p>
                    </section>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="default_box_container">
        <img class="mascot" src="assets/Frame 2.4.png" alt="A sleepy talking skull.">
        <div class="default_box">
            <h3>Hover a team to display info.</h3>
        </div>
    </div>
    <!-- FOOTER GOES HERE -->
<?php include_once __DIR__ . "/footer.php"; ?>