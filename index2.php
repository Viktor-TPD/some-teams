<!-- header goes here -->
<?php include_once __DIR__ . "/header.php"; ?>
<body>
 <div class="master_container">

     <div class="logo_container">
         <?php foreach ($teams as $team => $teamName):
        ?> 
        <div>
            <img src="<?= $teamName['logo']; ?>" alt="<?= $team ?>'s logo.">
        </div>
        <?php endforeach; ?>
    </div>
    <div class="article_container">TEST TEST TEST</div>
</div>   

<!-- footer goes here -->
<?php include_once __DIR__ . "/footer.php"; ?>