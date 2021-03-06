<?php
session_start();

if ($_POST["answer"] == 3) {
    $_SESSION["score"] += 1;
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'inc/head.php' ?>

<body class="bg-golf">
    <?php include 'inc/header.php'  ?>
    <!-- INGO'S QUESTIONS -->
    <main>

        
        <img class="question-image" src="img/q11-image-golfer.jpg">
        

        <div class="title">
            QUESTION 11
        </div>

        <div class="question">
            Which golfer won the 2012 and 2014 US Masters?
        </div>

        <form class="form" action="question12.php" method="post">

            <button type="submit" class="answer-button answer1" name="answer" value="1">
                Jon Rahm
            </button>
            <button type="submit" class="answer-button answer2" name="answer" value="2">
                Viktor Hovland
            </button>
            <button type="submit" class="answer-button answer3" name="answer" value="3">
                Bubba Watson
            </button>
            <button type="submit" class="answer-button answer4" name="answer" value="4">
                Patrick Cantlay
            </button>

        </form>

    </main>
    <!-- END CONTENT -->
    <?php include 'inc/footer.php' ?>
</body>

</html>