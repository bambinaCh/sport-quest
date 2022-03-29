<?php
session_start();


if ($_POST["answer"] == 3) {
    $_SESSION["score"] += 1;
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'inc/head.php' ?>

<body class="bg-olympics">
    <?php include 'inc/header.php' ?>
  
    <main>
        <img class="question-image" src="img/Trophy Women World Cup.jpg" alt="">
      
        <div class="title">QUESTION 13
        </div>

        <div class="question">Which country won the first women’s World Cup in soccer?
        </div>

        <form class="form" action="question14.php" method="post">
            <button type="submit" class="answer-button answer1" name="answer" value="1">Sweden</button>
            <button type="submit" class="answer-button answer2" name="answer" value="2">Brazil</button>
            <button type="submit" class="answer-button answer3" name="answer" value="3">USA</button>
            <button type="submit" class="answer-button answer4" name="answer" value="4">Germany</button>
        </form>

    </main>
    
    <?php include 'inc/footer.php' ?>
</body>

</html>