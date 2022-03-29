<?php
session_start();

if ($_POST["answer"] == 2) {
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
    <img class="question-image" src="img/campnou.jpeg" alt="">
        <div class="title">
            <p>Question 18
        </div>
        <div class="question">
        What is a soccer field called?
        </div>

        <form class="form" action="question19.php" method="post">

            <button type="submit" class="answer-button answer1" name="answer" value="1">A pitch</button>
            <button type="submit" class="answer-button answer2" name="answer" value="2">A field</button>
            <button type="submit" class="answer-button answer3" name="answer" value="3">A terrain</button>
            <button type="submit" class="answer-button answer4" name="answer" value="4">An area</button>

        </form>

    </main>
    <!-- END CONTENT -->
    <?php include 'inc/footer.php' ?>
</body>

</html>