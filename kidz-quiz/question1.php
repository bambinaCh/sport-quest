<?php
session_start();
$_SESSION["score"] = 0;
?>


<!--  THIS IS (_Chaimaa_) PAGE -->


<!DOCTYPE html>
<html lang="en">
<?php include '../inc/head.php' ?>

<body class="bg-">
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

        <form class="form" action="question2.php" method="post">

        <input type="number" name="number-text" id="number-text" class="" style="max-width: 80px;"><br>

        </form>

    </main>
    <!-- END CONTENT -->
    <?php include '../inc/footer.php' ?>
</body>

</html>