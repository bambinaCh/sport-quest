<?php
session_start();


if ($_POST["answer"] == 3) {
    $_SESSION["score"] += 1;
}
?>

<!--  THIS IS (_Sven_) PAGE -->

<!DOCTYPE html>
<html lang="en">
<?php include 'inc/head.php' ?>


<body class="bg-darts">
    <?php include 'inc/header.php' ?>
    
    <main>
        <img class="question-image" src="img/q14-image-archery-darts.jpg" alt="">
        
        <div class="title">QUESTION 14
        </div>
        
        <div class="question">What is the very center of a target called in archery or darts?
        </div>
        
        <form class="form" action="question15.php" method="post">
            <button type="submit" class="answer-button answer1" name="answer" value="1">Cockpit</button>
            <button type="submit" class="answer-button answer2" name="answer" value="2">Infield</button>
            <button type="submit" class="answer-button answer3" name="answer" value="3">Goal</button>
            <button type="submit" class="answer-button answer4" name="answer" value="4">Bullseye</button>
        </form>

    </main>

    <?php include 'inc/footer.php' ?>
</body>

</html>