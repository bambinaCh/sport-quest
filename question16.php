<?php
session_start();

if ($_POST["answer"] == 1) {
    $_SESSION["score"] += 1;
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'inc/head.php' ?>

<body class="bg-basketball">
    <?php include 'inc/header.php' ?>
    
    <main>
        <img class="question-image" src="img/basketball.jpeg" alt="">    
            
        <div class="title">QUESTION 17
        </div>
        
        <div class="question">Which basketball player was Michael Jordan nicknamed after when he was in high school?
        </div>

        <form class="form" action="question17.php" method="post">
            <button type="submit" class="answer-button answer1" name="answer" value="1">Hakeem "The Dream" Olajuwon</button>
            <button type="submit" class="answer-button answer2" name="answer" value="2">Earvin "Magic" Johnson Jr.</button>
            <button type="submit" class="answer-button answer3" name="answer" value="3">Karl "The Mailman" Malone</button>
            <button type="submit" class="answer-button answer4" name="answer" value="4">Wilt "The Big Dipper" Chamberlain</button>
        </form>

    </main>
   
    <?php include 'inc/footer.php' ?>
</body>

</html>