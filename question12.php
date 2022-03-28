<!DOCTYPE html>
<html lang="en">
<?php include 'inc/head.php' ?>

<body>
    <?php include 'inc/header.php'  ?>
    <!-- FILL WITH CONTAIN -->
    <main>

        <div class="title">
            <p>Question 1
        </div>
        <div class="question">
            <p id="ingq">Which player scored the “Hand of God” goal in a match of the 1986 World Cup?</p>
        </div>

        <form class="form" action="question2.php" method="post">

            <button type="submit" class="answer-button answer1" name="answer" value="1"><p id="ingoa">Cristiano Ronaldo</p></button>
            <button type="submit" class="answer-button answer2" name="answer" value="2"><p id="ingoa">Lionel Messi</p></button>
            <button type="submit" class="answer-button answer3" name="answer" value="3"><p id="ingoa">Diego Maradona</p></button>
            <button type="submit" class="answer-button answer4" name="answer" value="4"><p id="ingoa">Fito Zelaya</p></button>

        </form>

    </main>
    <!-- END CONTENT -->
    <?php include 'inc/footer.php' ?>
</body>

</html>