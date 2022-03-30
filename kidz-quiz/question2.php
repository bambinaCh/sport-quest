<?php
session_start();
$_SESSION["score"] = 0;
?>

<!--  THIS IS (_Sven_) PAGE -->


<!DOCTYPE html>
<html lang="en">
<?php include '../inc/head.php' ?>

<body class="bg-olympics">
    <?php include '../inc/header.php'?>
       
    <main>
        <img class="question-image" src="img/greece.jpeg" alt="">
        
        <div class="title">Question 2</div>
        
        <div class="question">
        When an Olympic athlete wins first place, what color medal do they get?
        </div>

<form class="form" action="question2.php" method="post">

    <form id="butt1"><input type="radio" id= "butt1_Leather" value="Leather" checked>
    <label for = "butt1_Leather" >Leather</label>
    <form id="butt2"><input type="radio" id= "butt2_Gold" value="Gold" checked>
    <label for = "butt2" >Gold</label>
    <form id="butt3"><input type="radio" id= "butt3_Silver" value="Silver" checked>
    <label for = "form3_no" >Silver</label>
    <form id="butt4"><input type="radio" id= "butt4_Bronze" value="Bronze" checked>
    <label for = "butt4" >Bronze</label>
    </form> 

<form action="question2.php" method="post" onsubmit="return validateRadio('single-choice');">
</form>

</main>

<?php include '../inc/footer.php' ?>
</body>

</html>