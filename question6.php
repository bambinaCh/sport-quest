<?php
session_start();

/* PLEASE CHANGE 3 WITH THE NUMBER OF THE CORRECT ANSWER OF THE QUESTION BEFORE*/
if ($_POST["answer"] == 2) {
    $_SESSION["score"] += 1;
}
?>


<!--  THIS IS (_ralph_) PAGE -->


<!DOCTYPE html>
<html lang="en">
<?php include 'inc/head.php' ?>

<body class="bg-golf">
    <?php include 'inc/header.php'  ?>
    <!-- FILL WITH CONTAIN -->
    <main>
        <img class="question-image" src="img/q6-image-hole-dimples.jpg" alt="">
        <div class="title">
            Question 6
        </div>
        <div class="question">
            How many dimples does an average golf ball have?
        </div>

        <form class="form" action="question7.php" method="post">

            <button type="submit" class="answer-button answer1" name="answer" value="1">128</button>
            <button type="submit" class="answer-button answer2" name="answer" value="2">196</button>
            <button type="submit" class="answer-button answer3" name="answer" value="3">256</button>
            <button type="submit" class="answer-button answer4" name="answer" value="4">336</button>

        </form>
    </main>
    <!-- END CONTENT -->
    <?php include 'inc/footer.php' ?>
</body>

</html>
