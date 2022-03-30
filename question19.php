<?php
session_start();

if ($_POST["answer"] == 1) {
    $_SESSION["score"] += 1;
}
?>


<!--  THIS IS (_Chaimaa_) PAGE -->


<!DOCTYPE html>
<html lang="en">
<?php include 'inc/head.php' ?>

<body class="bg-basketball">
    <?php include 'inc/header.php'  ?>
    <!-- FILL WITH CONTAIN -->
    <main>
    <img class="question-image" src="img/q19-image-nba-logo.png" alt="">
        <div class="title">
            <p>Question 19
        </div>
        <div class="question">
        What team has the most NBA titles?
        </div>

        <form class="form" action="question20.php" method="post">

            <button type="submit" class="answer-button answer1" name="answer" value="1">Los Angeles Lakers</button>
            <button type="submit" class="answer-button answer2" name="answer" value="2">Raptors</button>
            <button type="submit" class="answer-button answer3" name="answer" value="3">Boston Celtics</button>
            <button type="submit" class="answer-button answer4" name="answer" value="4">Chicago Bulls</button>

        </form>

    </main>
    <!-- END CONTENT -->
    <?php include 'inc/footer.php' ?>
</body>

</html>