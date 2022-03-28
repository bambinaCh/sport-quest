<?php
session_start();

if ($_POST["answer"] == 4) {
    $_SESSION["score"] += 1;
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'inc/head.php' ?>

<body>
    <?php include 'inc/header.php'  ?>

    <main>

    <div id="svenimage">
            <img id="svenimid" class="responsive" src="img/basketball.jpg">
        </div>
   
        <div class="title">
        <p id="svenans">Question 16</p>
        </div>

        <div class="question">
        <p id="svenq">Which basketball player was Michael Jordan nicknamed after when he was in high school?</p>
        </div>

        <form class="form" action="question16.php" method="post">

            <button type="submit" class="answer-button answer1" name="answer" value="1"><p id="svenans">Hakeem "The Dream" Olajuwon</p></button>
            <button type="submit" class="answer-button answer2" name="answer" value="2"><p id="svenans">Karl "The Mailman" Malone</p></button>
            <button type="submit" class="answer-button answer3" name="answer" value="3"><p id="svenans">Wilt "The Big Dipper" Chamberlain</p></button>
            <button type="submit" class="answer-button answer4" name="answer" value="4"><p id="svenans">Earvin "Magic" Johnson Jr.</p></button>
            </form>
    </main>
    <!-- END CONTENT -->
    <?php include 'inc/footer.php' ?>
</body>

</html>