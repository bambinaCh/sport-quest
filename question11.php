<!DOCTYPE html>
<html lang="en">
<?php include 'inc/head.php' ?>

<body>
    <?php include 'inc/header.php'  ?>
    <!-- INGO'S QUESTIONS -->
    <main>

        <div id="ingqimage">
            <img id="ingoiq" class="responsive" src="img/ingoq3.jpg">
        </div>

        <div class="title">
            <p id="ingoa">QUESTION NUMBER 11</p>
        </div>

        <div class="question">
            <p id="ingq">Which golfer won the 2012 and 2014 US Masters?</p>
        </div>

        <form class="form" action="question12.php" method="post">

            <button type="submit" class="answer-button answer1" name="answer" value="1">
                <p id="ingoa">Jon Rahm</p>
            </button>
            <button type="submit" class="answer-button answer2" name="answer" value="2">
                <p id="ingoa">Viktor Hovland</p>
            </button>
            <button type="submit" class="answer-button answer3" name="answer" value="3">
                <p id="ingoa">Bubba Watson</p>
            </button>
            <button type="submit" class="answer-button answer4" name="answer" value="4">
                <p id="ingoa">Patrick Cantlay</p>
            </button>

        </form>

    </main>
    <!-- END CONTENT -->
    <?php include 'inc/footer.php' ?>
</body>

</html>