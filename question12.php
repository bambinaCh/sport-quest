<!DOCTYPE html>
<html lang="en">
<?php include 'inc/head.php' ?>

<body>
    <?php include 'inc/header.php'  ?>
    <!-- INGO'S QUESTIONS -->
    <main>

        <div id="ingqimage">
            <img id="ingoiq" class="responsive" src="img/ingoq4.jpg">
        </div>

        <div class="title">
            <p id="ingoqn">QUESTION NUMBER 12</p>
        </div>

        <div class="question">
            <p id="ingq">Which player scored the “Hand of God” goal in a match of the 1986 World Cup?</p>
        </div>

        <form class="form" action="question13.php" method="post">

            <button type="submit" class="answer-button answer1" name="answer" value="1">
                <p id="ingoa">Cristiano Ronaldo</p>
            </button>
            <button type="submit" class="answer-button answer2" name="answer" value="2">
                <p id="ingoa">Lionel Messi</p>
            </button>
            <button type="submit" class="answer-button answer3" name="answer" value="3">
                <p id="ingoa">Diego Maradona</p>
            </button>
            <button type="submit" class="answer-button answer4" name="answer" value="4">
                <p id="ingoa">Fito Zelaya</p>
            </button>

        </form>

    </main>
    <!-- END CONTENT -->
    <?php include 'inc/footer.php' ?>
</body>

</html>