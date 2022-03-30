<?php
session_start();
$_SESSION["points-1"] = $_POST["points"];
?>

<!--  THIS IS (_Sven_) PAGE -->


<!DOCTYPE html>
<html lang="en">
<?php include '../inc/head.php' ?>

<body class="bg-kids">
    
<?php include '../inc/header.php'?>
       
    <main>
        <img class="question-image" src="../img/rings.jpg" alt="">
        
        <div class="title">Question 2</div>
        
        <div class="question">
        When an Olympic athlete wins first place, what color medal do they get?
        </div>

        <form action="/kidz-quiz/question3.php" method="post" onsubmit="return validateRadio();">

            <input type="radio" name="butt" id="butt1_Leather" value="Leather">
            <label for="butt1_Leather" >Leather</label>
            <input type="radio" name="butt" id="butt2_Gold" value="Gold">
            <label for="butt2_Gold" >Gold</label>
            <input type="radio" name="butt" id="butt3_Silver" value="Silver">
            <label for="butt3_Silver" >Silver</label>
            <input type="radio" name="butt" id="butt4_Bronze" value="Bronze">
            <label for="butt4_Bronze" >Bronze</label>

            <p id="validation-warning" class="warning"></p>

            <input type="hidden" name="points" id="rings" value="0">

            <button type="submit" class="next-button">Next</button><div id="bugger" class="warning"></div>
        </form>

    </main>

<?php include '../inc/footer.php' ?>

</body>

<script src="/kidz-quiz/js/validation2.js"></script>

</html>