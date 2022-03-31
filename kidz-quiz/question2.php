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
        <img class="question-image" src="../img/medals.jpeg" alt="">
        
        <div class="title">Question 2</div>
        
        <div class="question">
        When an Olympic athlete wins first place, what color medal do they get?
        </div>

        <form action="/kidz-quiz/question3.php" method="post" onsubmit="return validateRadio();">

            <div>
                <input type="radio" name="butt" id="butt1_Leather" value="Leather">
                <label class="answer-text" for="butt1_Leather" >Leather</label>
            </div>
            <div>
                <input type="radio" name="butt" id="butt2_Gold" value="Gold">
                <label class="answer-text" for="butt2_Gold" >Gold</label>
            </div>
            
            <div>
                <input type="radio" name="butt" id="butt3_Silver" value="Silver">
                <label class="answer-text" for="butt3_Silver" >Silver</label>
            </div>
            <div>
                <input type="radio" name="butt" id="butt4_Bronze" value="Bronze">
                <label class="answer-text" for="butt4_Bronze" >Bronze</label>
            </div>

            <p id="validation-warning" class="warning"></p>

            <input type="hidden" name="points" id="rings" value="0">

            <button type="submit" class="next-button">Next</button><div id="bugger" class="warning"></div>
        </form>

    </main>

<?php include '../inc/footer.php' ?>

</body>

<script src="/kidz-quiz/js/validation2.js"></script>

</html>