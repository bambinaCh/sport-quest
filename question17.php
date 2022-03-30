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

<body class="bg-olympics">
    <?php include 'inc/header.php'  ?>
    <!-- FILL WITH CONTAIN -->
    <main>
    <img class="question-image" src="img/q17-image.jpg" alt="">
        <div class="title">
            <p>Question 17
        </div>
        <div class="question">
        During the first-ever modern Olympics, what were the first placers awarded with?
        </div>

        <form class="form" action="question18.php" method="post">

            <button type="submit" class="answer-button answer1" name="answer" value="1">Gold medals</button>
            <button type="submit" class="answer-button answer2" name="answer" value="2">Bronze medals</button>
            <button type="submit" class="answer-button answer3" name="answer" value="3">Silver medals</button>
            <button type="submit" class="answer-button answer4" name="answer" value="4">Copper medals</button>

        </form>

    </main>
    <!-- END CONTENT -->
    <?php include 'inc/footer.php' ?>
</body>

</html>