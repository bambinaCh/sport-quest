<?php
session_start();

/* PLEASE CHANGE 3 WITH THE NUMBER OF THE CORRECT ANSWER OF THE QUESTION BEFORE*/
if ($_POST["answer"] == 3) { // TODO
    $_SESSION["score"] += 1;
}
?>

<!--  THIS IS (_ralph_) PAGE -->


<!DOCTYPE html>
<html lang="en">
<?php include 'inc/head.php' ?>

<body class="bg-canada">
    <?php include 'inc/header.php'  ?>
    <!-- FILL WITH CONTAIN -->
    <main>
        <img class="question-image" src="img/q5-image.jpg" alt="">
        <div class="title">
            Question 5
        </div>
        <div class="question">
            What’s the national sport of Canada?
        </div>

        <form class="form" action="question6.php" method="post">

            <button type="submit" class="answer-button answer1" name="answer" value="1">Polo</button>
            <button type="submit" class="answer-button answer2" name="answer" value="2">Lacrosse</button>
            <button type="submit" class="answer-button answer3" name="answer" value="3">Baseball</button>
            <button type="submit" class="answer-button answer4" name="answer" value="4">Golf</button>

        </form>
    </main>
    <!-- END CONTENT -->
    <?php include 'inc/footer.php' ?>
</body>

</html>
