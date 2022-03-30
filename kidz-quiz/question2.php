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
}
    <form id="butt1"><input type="radio" id= "butt1_Leather" value="Leather" checked>
    <label for = "butt2" >No</label>
    <input type="radio" id= "form1_yes" value="yes" onClick= exam()>
    <label for = "form2_yes" >Yes</label>
    </form> 

        <form class="form" action="question2.php" method="post">

        <input type="number" name="number-text" id="number-text" class="" style="max-width= 80px;"><br> 
        
        function validateRadio(radioName) {
    // 'radioButtons' ist eine Liste die einen bis mehrere Radio Buttons enthalten kann.
    // Kann auch leer sein 🙂
    let radioButtons = document.getElementsByName(radioName);

    // Wir müssen die Liste von radioButtons nach dem gewählten Wert durchsuchen.
    for (let i = 0; i < radioButtons.length; i++) {
        let radioBtn = radioButtons[i]; // Wähle das 'i'-te Element aus der Liste aus.

        if (radioBtn.checked == true) {
            return true;
        }
    }

    // Kein Radio-Button wurde angewählt.
    setWarning("Bitte wähle eine Option.");
    return false; // STOPP: Submit abbrechen und auf der Seite bleiben.
}

function setWarning(text) {
    let warningElement = document.getElementById("validation-warning");
    warningElement.innerText = text;
}

<form action="question2.php" method="post" onsubmit="return validateRadio('single-choice');">
</form>

</main>

<?php include '../inc/footer.php' ?>
</body>

</html>