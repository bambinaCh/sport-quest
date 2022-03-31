

<!--  THIS IS (_Chaimaa_) PAGE -->


<!DOCTYPE html>
<html lang="en">
<?php include '../inc/head.php' ?>

<body class="bg-kids">
    <?php include '../inc/header.php'  ?>
    <!-- FILL WITH CONTAIN -->
    <main>
        <img class="question-image" src="../img/rings.jpg" alt="">
        <div class="title">
            <p>Question 1
        </div>
        <div class="question">
            How many rings has the olympics symbol?
        </div>

        <form action="/kidz-quiz/question2.php" method="post" onsubmit="return validateNumber();">

            <input type="number" name="number-text" id="number-text" class="number-imput"><br>
            <input type="hidden" name="lastPageID" value="question-1">
            <input type="hidden" name="points"  id="rings" value="">

            <p id="validation-warning" class="warning"></p>

            <button type="submit" class="next-button">NEXT</button>
        </form>

    </main>
    <!-- END CONTENT -->
    <?php include '../inc/footer.php' ?>
</body>
<script src="/kidz-quiz/js/validation1.js"></script>

</html>