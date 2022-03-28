<?php
session_start();

if ($_POST["answer"] == 4) {
    $_SESSION["score"] += 1;
}
?>


<!DOCTYPE html>
<html lang="en">
<?php include 'inc/head.php' ?>

<body>
    <?php include 'inc/header.php'  ?>

    <main>

    <div id="svenimage">
            <img id="svenimid" class="responsive" src="img/loveheart.jpg">
        </div>

        <div class="title">
        <p id="svenans">Question 15</p>
        </div>

        <div class="question">
        <p id="svenq">In what game is “love” a score?</p>
        </div>

        <form class="form" action="question16.php" method="post">

            <button type="submit" class="answer-button answer1" name="answer" value="1"><p id="svenans">Roulette</p></button>
            <button type="submit" class="answer-button answer2" name="answer" value="2"><p id="svenans">Golf</p></button>
            <button type="submit" class="answer-button answer3" name="answer" value="3"><p id="svenans">Chess</p></button>
            <button type="submit" class="answer-button answer4" name="answer" value="4"><p id="svenans">Tennis</p></button>


        </form>
    </main>

    <?php include 'inc/footer.php' ?>
</body>

</html>