<?php
session_start();

if ($_POST["answer"] == 3) {
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
    <img class="question-image" src="img/q20-image-mauricio.jpg" alt="">
        <div class="title">
            <p>Question 20
        </div>
        <div class="question">
        How old was the youngest professional soccer player?
        </div>

        <form class="form" action="result.php" method="post">

            <button type="submit" class="answer-button answer1" name="answer" value="1">12</button>
            <button type="submit" class="answer-button answer2" name="answer" value="2">14</button>
            <button type="submit" class="answer-button answer3" name="answer" value="3">15</button>
            <button type="submit" class="answer-button answer4" name="answer" value="4">16</button>

        </form>

    </main>
    <!-- END CONTENT -->
    <?php include 'inc/footer.php' ?>
</body>

</html>