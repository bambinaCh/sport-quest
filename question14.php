<?php
session_start();

if ($_POST["answer"] == 4) {
    $_SESSION["score"] += 1;
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'inc/head.php' ?>

<body class=><?php include 'inc/header.php'  ?>
    
    <main>
        <img class="question-image" src="img/Hungergames.jpg">
        
        <div class="title"><p id="svenans">QUESTION 14</p>
        What is the very center of a target called in archery or darts?
        </div>
        
        <form class="form" action="question14.php" method="post">
            <button type="submit" class="answer-button answer1" name="answer" value="1">Cockpit</button>
            <button type="submit" class="answer-button answer2" name="answer" value="2">Infield</button>
            <button type="submit" class="answer-button answer3" name="answer" value="3">Goal</button>
            <button type="submit" class="answer-button answer4" name="answer" value="4">Bullseye</button>
        </form>

    </main>
    
    <?php include 'inc/footer.php' ?>
</body>

</html>