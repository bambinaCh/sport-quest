<?php
session_start();
$_SESSION["points-2"] = $_POST["points"];
?>

<!--  THIS IS (_ralph_) PAGE -->

<!DOCTYPE html>
<html lang="en">
<?php include '../inc/head.php' ?>
<body class="bg-kids">
    <?php include '../inc/header.php'  ?>
    <main>
        <img class="question-image" src="../img/greece.jpeg" alt="">
        <div class="title">Question 3</div>
        <div class="question">Guess the answer!</div>
        <form class="form" action="question4.php" method="post" id="aForm">
            <div>
                <input type="checkbox" name="" id="cb1">
                <label for="cb1">This is Baseball</label>
            </div>
            <div>
                <input type="checkbox" name="" id="cb2">
                <label for="cb2">This is Cricket</label> <br>
            </div>
            <button type="submit" class="next-button">Next</button>
            <div id="bugger" class="warning"></div>
            <input type="hidden" name="points" id="tally" value="0">
        </form>
        <script src="js/validation3.js"></script>
    </main>
    <?php include '../inc/footer.php' ?>
</body>
</html>
