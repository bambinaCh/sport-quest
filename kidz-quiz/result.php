<?php
session_start();

$total = 5;
$points = $_SESSION["points-1"]
    + $_SESSION["points-2"]
    + $_SESSION["points-3"]
    + $_SESSION["points-4"]
    + $_POST["points"];
?>

<!--  THIS IS (_ralph_) PAGE -->

<!DOCTYPE html>
<html lang="en">
<?php include '../inc/head.php' ?>

<body class="bg-result">
    <?php include '../inc/header.php'  ?>
    <main>
        <video autoplay muted loop id="myVideo">
            <source src="/img/result-bg.mp4" type="video/mp4">
        </video>
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
