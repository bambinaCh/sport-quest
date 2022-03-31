<?php
session_start();
$_SESSION["points-4"] = $_POST["points"];
?>


<!--  THIS IS (_Chaimaa_) PAGE -->


<!DOCTYPE html>
<html lang="en">
<?php include '../inc/head.php' ?>

<body class="bg-kids">
    <?php include '../inc/header.php'  ?>
    <!-- FILL WITH CONTAIN -->
    <main>
        <img class="question-image" src="../img/q5-kid-image-bolt.jpg" alt="">
        <div class="title">
            Question 5
        </div>
        <div class="question">
        How long is the shortest sprint race that Usain Bolt won?
        </div>

        <form action="/kidz-quiz/result.php" method="post" onsubmit="return validateNumber1();">

            <input type="number" name="number-text" id="number-text" class="number-imput">
            <input type="hidden" name="lastPageID" value="question-5">
            <input type="hidden" name="points"  id="meters" value="">

            <div id="validation-warning" class="warning"></div>

            <button type="submit" class="next-button">NEXT</button>
        </form>

    </main>
    <!-- END CONTENT -->
    <?php include '../inc/footer.php' ?>
</body>
<script src="/kidz-quiz/js/validation1.js"></script>

</html>
