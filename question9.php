<!DOCTYPE html>
<html lang="en">
<?php include 'inc/head.php' ?>

<body>
    <?php include 'inc/header.php'  ?>
    <!-- INGO'S QUESTIONS -->
    <main>


        
        <img class="question-image" src="img/ingoq1.jpg">
        

        <div class="title">
            QUESTION NUMBER 9
        </div>

        <div class="question">
            Who is the greatest soccer player, also known as "The King of Soccer"?
        </div>

        <form class="form" action="question10.php" method="post">

            <button type="submit" class="answer-button answer1" name="answer" value="1">
                David Beckham
            </button>
            <button type="submit" class="answer-button answer2" name="answer" value="2">
                Pelé
            </button>
            <button type="submit" class="answer-button answer3" name="answer" value="3">
                Diego Maradona
            </button>
            <button type="submit" class="answer-button answer4" name="answer" value="4">
                Magico Gonzales
            </button>

        </form>

    </main>
    <!-- END CONTENT -->
    <?php include 'inc/footer.php' ?>
</body>

</html>