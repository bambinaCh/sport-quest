<?php
session_start();

/* PLEASE CHANGE 3 WITH THE NUMBER OF THE CORRECT ANSWER OF THE QUESTION BEFORE*/
if ($_POST["answer"] == 4) {
    $_SESSION["score"] += 1;
}
?>


<!--  THIS IS (_Chaimaa_) PAGE -->


<!DOCTYPE html>
<html lang="en">
<?php include 'inc/head.php' ?>

<body class="bg-football">
    <?php include 'inc/header.php'  ?>
    <!-- FILL WITH CONTAIN -->
    <main>
    <img class="question-image" src="img/q2-image-golden-ball.jpg" alt="">
        <div class="title">
            Question 2
        </div>
        <div class="question">
        How much Ballon d'Or has Messi won?
        </div>

        <form class="form" action="question3.php" method="post">

            <button type="submit" class="answer-button answer1" name="answer" value="1">5</button>
            <button type="submit" class="answer-button answer2" name="answer" value="2">7</button>
            <button type="submit" class="answer-button answer3" name="answer" value="3">6</button>
            <button type="submit" class="answer-button answer4" name="answer" value="4">8</button>

        </form>
    </main>
    <!-- END CONTENT -->
    <?php include 'inc/footer.php' ?>
</body>

</html>