<?php
session_start();

/* PLEASE CHANGE 3 WITH THE NUMBER OF THE CORRECT ANSWER OF THE QUESTION BEFORE*/
if ($_POST["answer"] == 4) {
    $_SESSION["score"] += 1;
}
?>


<!--  THIS IS (_ralph_) PAGE -->


<!DOCTYPE html>
<html lang="en">
<?php include 'inc/head.php' ?>

<body>
    <?php include 'inc/header.php'  ?>
    <!-- FILL WITH CONTAIN -->
    <main>
        <div class="title">
            Question 7
        </div>
        <div class="question">
            What country has competed the most times in the Summer Olympics yet hasn’t won a gold medal
        </div>

        <form class="form" action="question8.php" method="post">

            <button type="submit" class="answer-button answer1" name="answer" value="1">The Philippines</button>
            <button type="submit" class="answer-button answer2" name="answer" value="2">Thailand</button>
            <button type="submit" class="answer-button answer3" name="answer" value="3">Andorra</button>
            <button type="submit" class="answer-button answer4" name="answer" value="4">Iceland</button>

        </form>
    </main>
    <!-- END CONTENT -->
    <?php include 'inc/footer.php' ?>
</body>

</html>
