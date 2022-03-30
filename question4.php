<?php
session_start();

/* PLEASE CHANGE 3 WITH THE NUMBER OF THE CORRECT ANSWER OF THE QUESTION BEFORE*/
if ($_POST["answer"] == 2) {
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
        <img class="question-image" src="img/q4-image.jpg" alt="">
        <div class="title">
            Question 4
        </div>
        <div class="question">
            What team does James LeBron play for?
        </div>

        <form class="form" action="question5.php" method="post">

            <button type="submit" class="answer-button answer1" name="answer" value="1">Chicago Bulls</button>
            <button type="submit" class="answer-button answer2" name="answer" value="2">Minnesota Vikings</button>
            <button type="submit" class="answer-button answer3" name="answer" value="3">Los Angeles Lakers</button>
            <button type="submit" class="answer-button answer4" name="answer" value="4">Pittsburgh Steelers</button>

        </form>
    </main>
    <!-- END CONTENT -->
    <?php include 'inc/footer.php' ?>
</body>

</html>