<!DOCTYPE html>
<html lang="en">
    <!-- THIS IS WHERE MY LANDING PAGE GOES :) -->

<!-- 16 LAG; PRESENTERA DEM 3x PER SIDA? BÖRJAR MED DET SOM AMBITION. -->

<!-- EXEMPEL PÅ ENTRY I $TEAMS: -->

<!-- skicka till header.php > -->
<!-- $teams[] -->
<!-- 'SKN St. Pölten' => [
        'league' => 'ÖFB-Frauenliga (Austria)',
        'uefa-coefficient-ranking' => 26,
        'city' => 'St. Pölten',
        'url' => 'https://www.skn-frauen.at/',
        'logo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSkiSy4BkhZp1RgOL8cKly0rIU2uSXshWGSzQ&s',
        'group' => 'D'
    ] -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🏃‍♀️⚽Some Teams⚽🏃‍♀️</title>
    <!-- PHP STUFFS -->
    <?php include_once __DIR__ . '/data.php'; ?>
</head>
<!-- ^ skicka till header.php -->
<!-- include_once __DIR__ . "header.php"; --> <!-- lägg till php tags här! -->
<body>
    <?php foreach ($teams as $team => $teamName):
    ?><article>
        <img src="<?= $teamName['logo']; ?>" alt="<?= $team ?>'s logo.">
        <h1><?= $team;?></h1>


    </article>
    <?php endforeach; ?>

</body>
</html>


