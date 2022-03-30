<?php
session_start();
$_SESSION["points-3"] = $_POST["points"];
?>

<!--  THIS IS (_ralph_) PAGE -->

<!DOCTYPE html>
<html lang="en">
<?php include '../inc/head.php' ?>
<body class="bg-kids">
    <?php include '../inc/header.php'  ?>
    <main>
        <img class="question-image" src="../img/q4-kid-image-soccer" alt="">
        <div class="title">Question 4</div>
        <div class="question">How long does a soccer game last?</div>
        <form class="form" action="question5.php" method="post" id="aForm">
            <div>
                <input type="checkbox" name="" id="cb1">
                <label for="cb1">45 minutes</label>
            </div>
            <div>
                <input type="checkbox" name="" id="cb2">
                <label for="cb2">90 minutes</label>
            </div>
            <div>
                <input type="checkbox" name="" id="cb3">
                <label for="cb3">120 minutes</label>
            </div>
            <button type="submit" class="next-button">Next</button>
            <div id="bugger" class="warning"></div>
            <input type="hidden" name="points" id="tally" value="0">
        </form>
        <script src="js/validation4.js"></script>
    </main>
    <?php include '../inc/footer.php' ?>
</body>
</html>
