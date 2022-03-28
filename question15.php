<?php
session_start();

if ($_POST["answer"] == 1) {
    $_SESSION["score"] += 1;
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'inc/head.php' ?>

<body class=><?php include 'inc/header.php'  ?>
   
    <main>
        <img class="question-image" src="img/heart.jpg">
        
        <div class="title"><p id="svenans">QUESTION 15</p>
        In what game is “love” a score?
        </div>

        <form class="form" action="question15.php" method="post">
            <button type="submit" class="answer-button answer1" name="answer" value="1">Tennis</button>
            <button type="submit" class="answer-button answer2" name="answer" value="2">Chess</button>
            <button type="submit" class="answer-button answer3" name="answer" value="3">Golf</button>
            <button type="submit" class="answer-button answer4" name="answer" value="4">Roulette</button>
        </form>
 
    </main>

    <?php include 'inc/footer.php' ?>
</body>

</html>