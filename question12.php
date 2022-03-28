<!DOCTYPE html>
<html lang="en">
<?php include 'inc/head.php' ?>

<body>
    <?php include 'inc/header.php'  ?>
    <!-- INGO'S QUESTIONS -->
    <main>

        
        <img class="question-image" src="img/ingoq4.jpg">
        

        <div class="title">
            QUESTION NUMBER 12
        </div>

        <div class="question">
            Which player scored the “Hand of God” goal in a match of the 1986 World Cup?
        </div>

        <form class="form" action="question13.php" method="post">

            <button type="submit" class="answer-button answer1" name="answer" value="1">
                Cristiano Ronaldo
            </button>
            <button type="submit" class="answer-button answer2" name="answer" value="2">
                Lionel Messi
            </button>
            <button type="submit" class="answer-button answer3" name="answer" value="3">
                Diego Maradona
            </button>
            <button type="submit" class="answer-button answer4" name="answer" value="4">
                Fito Zelaya
            </button>

        </form>

    </main>
    <!-- END CONTENT -->
    <?php include 'inc/footer.php' ?>
</body>

</html>