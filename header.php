<!DOCTYPE html>
<html lang="en">
    <!-- THIS IS WHERE MY LANDING PAGE GOES :) -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $dynamicTitle ?></title>
    <link rel="icon" type="image/x-icon" href="/assets/Frame 2.4.png">
    <link rel="stylesheet" href="style.css" />
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fascinate+Inline&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fascinate+Inline&family=Nova+Round&display=swap" rel="stylesheet">

    <!-- PHP STUFFS -->
    <?php include_once __DIR__ . '/data.php'; ?>
    <nav>
        <!-- <img src="assets/x1/Frame 2.2.png" alt="Two cartoon skulls facing away from eachother."> -->
        <div class="nav_items">
            <!-- <a href="index.php">Teams</a> -->
            <a class="nav_link" href="index.php">Teams</a>
            <a class="nav_link" href="about.php">About</a>

        </div>
    </nav>
</head>