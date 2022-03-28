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
            <img id="svenimid" class="responsive" src="img/Trophy Women World Cup.jpg">
        </div>

        <div class="title">
            <p id="svenans">QUESTION 13</p>
        </div>

        <div class="question"></div>
        <p id="svenq">Which country won the first women’s World Cup in soccer?</p>
        </div>

        <form class="form" action="question14.php" method="post">

            <button type="submit" class="answer-button answer1" name="answer" value="1"><p id="svenans">Sweden</p></button>
            <button type="submit" class="answer-button answer2" name="answer" value="2"><p id="svenans">USA</p></button>
            <button type="submit" class="answer-button answer3" name="answer" value="3"><p id="svenans">Germany</p></button>
            <button type="submit" class="answer-button answer4" name="answer" value="4"><p id="svenans">Brazil</p></button>
            </form>
    </main>
    <!-- END CONTENT -->
    <?php include 'inc/footer.php' ?>
</body>

</html>