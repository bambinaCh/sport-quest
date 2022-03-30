<?php
session_start();

$total = 5;
$points = (int)$_SESSION["points-1"]
    + (int)$_SESSION["points-2"]
    + (int)$_SESSION["points-3"]
    + (int)$_SESSION["points-4"]
    + (int)$_POST["points"];
?>

<!--  THIS IS (_ralph_) PAGE -->

<!DOCTYPE html>
<html lang="en">
<?php include '../inc/head.php' ?>

<body class="bg-kids">
    <?php include '../inc/header.php'  ?>
    <main>
        <div class="title-rp">
            SUMMARY
        </div>
        <div class="score-rp">
            YOUR SCORE IS <?=$points;?>/<?=$total?> POINTS!
        </div>
        <a class="answer-button" href="question1.php">PLAY AGAIN</a>
    </main>
    <?php include '../inc/footer.php' ?>
</body>

</html>
