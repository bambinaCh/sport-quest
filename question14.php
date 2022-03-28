<?php
session_start();


if ($_POST["answer"] == 2) {
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
            <img id="svenimid" class="responsive" src="img/Hungergames.jpg">
        </div>

        <div class="title">
            <p id="svenans">Question 14</p>
        </div>

        <div class="question">
        <p id="ingq">What is the very center of a target called in archery or darts?</p>
        </div>

        <form class="form" action="question15.php" method="post">

            <button type="submit" class="answer-button answer1" name="answer" value="1"><p id="svenans">Infield</p></button>
            <button type="submit" class="answer-button answer2" name="answer" value="2"><p id="svenans">Bullseye</p></button>
            <button type="submit" class="answer-button answer3" name="answer" value="3"><p id="svenans">Cockpit</p></button>
            <button type="submit" class="answer-button answer4" name="answer" value="4"><p id="svenans">Goal</p></button>
        </form>

    </main>

    <?php include 'inc/footer.php' ?>
</body>

</html>