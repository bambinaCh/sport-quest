<?php
session_start();

/* PLEASE CHANGE 3 WITH THE NUMBER OF THE CORRECT ANSWER OF THE QUESTION BEFORE*/
if ($_POST["answer"] == 1) { // TODO
    $_SESSION["score"] += 1;
}
?>

<!--  THIS IS (_ralph_Chaimaa_Sven_Ingo_) PAGE -->


<!DOCTYPE html>
<html lang="en">
<?php include 'inc/head.php' ?>

<body class="bg-result">
    <?php include 'inc/header.php'  ?>
    <!-- FILL WITH CONTAIN -->
    <main>
        <video autoplay muted loop id="myVideo">
            <source src="/img/result-bg.mp4" type="video/mp4">
        </video>

        <div class="title-rp">
            SUMMARY
        </div>

        <div class="score-rp">
            YOUR SCORE IS <?php echo $_SESSION["score"]; ?>/20 POINTS!
        </div>


        <div class="play-button">
            <a class="play-button-text" href="question1.php">PLAY AGAIN</a>
        </div>
    </main>
    <!-- END CONTENT -->
    <?php include 'inc/footer.php' ?>
</body>

</html>