<?php
session_start();

/* PLEASE CHANGE 3 WITH THE NUMBER OF THE CORRECT ANSWER OF THE QUESTION BEFORE*/
if ($_POST["answer"] == 1) {
    $_SESSION["score"] += 1;
}
?>


<!--  THIS IS (_ralph_) PAGE -->


<!DOCTYPE html>
<html lang="en">
<?php include 'inc/head.php' ?>

<body class="bg-boxing">
    <?php include 'inc/header.php'  ?>
    <!-- FILL WITH CONTAIN -->
    <main>
        <img class="question-image" src="img/q8-image.jpg" alt="">
        <div class="title">
            Question 8
        </div>
        <div class="question">
            The classic 1980 movie called Raging Bull is about which real-life boxer?
        </div>

        <form class="form" action="question9.php" method="post">

            <button type="submit" class="answer-button answer1" name="answer" value="1">Jack Dempsey</button>
            <button type="submit" class="answer-button answer2" name="answer" value="2">Jake LaMotta</button>
            <button type="submit" class="answer-button answer3" name="answer" value="3">Mike Tyson</button>
            <button type="submit" class="answer-button answer4" name="answer" value="4">Joe Louis</button>

        </form>
    </main>
    <!-- END CONTENT -->
    <?php include 'inc/footer.php' ?>
</body>

</html>
