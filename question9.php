<!DOCTYPE html>
<html lang="en">
<?php include 'inc/head.php' ?>

<body>
    <?php include 'inc/header.php'  ?>
    <!-- INGO'S QUESTIONS -->
    <main>


        <div id="ingqimage">
            <img id="ingoiq" class="responsive" src="img/ingoq1.jpg">
        </div>

        <div class="title">
            <p id="ingoa">QUESTION NUMBER 9</p>
        </div>

        <div class="question">
            <p id="ingq">Who is the greatest soccer player, also known as "The King of Soccer"?</p>
        </div>

        <form class="form" action="question10.php" method="post">

            <button type="submit" class="answer-button answer1" name="answer" value="1">
                <p id="ingoa">David Beckham</p>
            </button>
            <button type="submit" class="answer-button answer2" name="answer" value="2">
                <p id="ingoa">Pelé</p>
            </button>
            <button type="submit" class="answer-button answer3" name="answer" value="3">
                <p id="ingoa">Diego Maradona</p>
            </button>
            <button type="submit" class="answer-button answer4" name="answer" value="4">
                <p id="ingoa">Magico Gonzales</p>
            </button>

        </form>

    </main>
    <!-- END CONTENT -->
    <?php include 'inc/footer.php' ?>
</body>

</html>