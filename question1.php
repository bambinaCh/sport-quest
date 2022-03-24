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
            How are you?
        </div>

        <form class="form" action="question2.php" method="post">

            <button type="submit" class="answer-button answer1" name="answer" value="1">ANSWER</button>
            <button type="submit" class="answer-button answer2" name="answer" value="2">ANSWER</button>
            <button type="submit" class="answer-button answer3" name="answer" value="3">ANSWER</button>
            <button type="submit" class="answer-button answer4" name="answer" value="4">ANSWER</button>

        </form>

    </main>
    <!-- END CONTENT -->
    <?php include 'inc/footer.php' ?>
</body>

</html>