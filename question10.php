<!DOCTYPE html>
<html lang="en">
<?php include 'inc/head.php' ?>

<body>
    <?php include 'inc/header.php'  ?>
    <!-- INGO'S QUESTIONS -->
    <main>

        <div id="ingqimage">
            <img id="ingoiq" class="responsive" src="img/ingoq2.jpg">
        </div>

        <div class="title">
            <p id="ingoa">QUESTION NUMBER 10</p>
        </div>

        <div class="question">
            <p id="ingq">When was Basketball made?</p>
        </div>

        <form class="form" action="question11.php" method="post">

            <button type="submit" class="answer-button answer1" name="answer" value="1">
                <p id="ingoa">1737</p>
            </button>
            <button type="submit" class="answer-button answer2" name="answer" value="2">
                <p id="ingoa">1974</p>
            </button>
            <button type="submit" class="answer-button answer3" name="answer" value="3">
                <p id="ingoa">1891</p>
            </button>
            <button type="submit" class="answer-button answer4" name="answer" value="4">
                <p id="ingoa">1987</p>
            </button>

        </form>

    </main>
    <!-- END CONTENT -->
    <?php include 'inc/footer.php' ?>
</body>

</html>