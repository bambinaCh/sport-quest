<?php
session_start();
$_SESSION["score"] = 0;
?>


<!--  THIS IS (_Chaimaa_) PAGE -->


<!DOCTYPE html>
<html lang="en">
<?php include 'inc/head.php' ?>

<body class="bg-olympics">
    <?php include 'inc/header.php'  ?>
    <!-- FILL WITH CONTAIN -->
    <main>
        <img class="question-image" src="img/greece.jpeg" alt="">
        <div class="title">
            <p>Question 1
        </div>
        <div class="question">
            Where did the first ancient Olympic games take place?
        </div>

        <form class="form" action="question2.php" method="post">

            <button type="submit" class="answer-button answer1" name="answer" value="1">Italy</button>
            <button type="submit" class="answer-button answer2" name="answer" value="2">France</button>
            <button type="submit" class="answer-button answer3" name="answer" value="3">Egypt</button>
            <button type="submit" class="answer-button answer4" name="answer" value="4">Greece</button>

        </form>

    </main>
    <!-- END CONTENT -->
    <?php include 'inc/footer.php' ?>
</body>

</html>