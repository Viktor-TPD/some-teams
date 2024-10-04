<!-- HEADER GOES HERE -->
<?php include_once __DIR__ . "/header.php"; ?>

<body>
    <div class="master_container">
        <!-- Logo Grid on the Left -->
        <div class="logo_container">
            <?php foreach ($teams as $index => $teamName): ?>
                <div class="logo_item">
                    <img src="<?= $teamName['logo']; ?>" alt="<?= $teamName['name'] ?>'s logo.">
                </div>

                <!-- Article corresponding to the logo -->
                <div class="article_item">
                    <section>
                        <h1><?= $teamName['name']; ?></h1>
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

    <!-- FOOTER GOES HERE -->
<?php include_once __DIR__ . "/footer.php"; ?>