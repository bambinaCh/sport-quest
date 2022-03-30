<?php
session_start();

/* PLEASE CHANGE 3 WITH THE NUMBER OF THE CORRECT ANSWER OF THE QUESTION BEFORE*/
if ($_POST["answer"] == 3) {
    $_SESSION["score"] += 1;
}
?>


<!--  THIS IS (_Chaimaa_) PAGE -->


<!DOCTYPE html>
<html lang="en">
<?php include 'inc/head.php' ?>

<body class="bg-olympics">
    <?php include 'inc/header.php'  ?>
    <!-- FILL WITH CONTAIN -->
    <main>
        <img class="question-image" src="img/q3-image.jpg" alt="">
        <div class="title">
            Question 3
        </div>
        <div class="question">
            What do the rings in the Olympics represent?
        </div>

        <form class="form" action="question4.php" method="post">

            <button type="submit" class="answer-button answer1" name="answer" value="1">The different sport types</button>
            <button type="submit" class="answer-button answer2" name="answer" value="2">The continents of the world</button>
            <button type="submit" class="answer-button answer3" name="answer" value="3">The colors of the rainbow</button>
            <button type="submit" class="answer-button answer4" name="answer" value="4">The unification of the Unions</button>

        </form>
    </main>
    <!-- END CONTENT -->
    <?php include 'inc/footer.php' ?>
</body>

</html>