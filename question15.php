<?php
session_start();

/* PLEASE CHANGE 3 WITH THE NUMBER OF THE CORRECT ANSWER OF THE QUESTION BEFORE*/
if ($_POST["answer"] == 4) {
    $_SESSION["score"] += 1;
}
?>



<!DOCTYPE html>
<html lang="en">
<?php include 'inc/head.php' ?>

<body>
    <?php include 'inc/header.php'  ?>
    <!-- FILL WITH CONTAIN -->
    <main>
        <div class="title">
            Question 15
        </div>
        <div class="question">
        In what game is “love” a score?
        </div>

        <form class="form" action="question16.php" method="post">

            <button type="submit" class="answer-button answer1" name="answer" value="1">5</button>
            <button type="submit" class="answer-button answer2" name="answer" value="2">7</button>
            <button type="submit" class="answer-button answer3" name="answer" value="3">6</button>
            <button type="submit" class="answer-button answer4" name="answer" value="4">8</button>

        </form>
    </main>

    <?php include 'inc/footer.php' ?>
</body>

</html>