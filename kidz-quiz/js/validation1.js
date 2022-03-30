/* THIS IS (_Chaimaa_) PAGE */


// NUMBER VALIDATION
function validateNumber() {

    let value = document.getElementById("number-text").value;
    // wenn kein wert, soll stoppen
    if (value == "") {
        setWarning("Please fill with a number.");

        return false;
    }
    else if (value === "5") {

        document.getElementsById("rings").value = 1;

    }
    else {
        document.getElementsById("rings").value = 0;
    }

}




//WARNING
function setWarning(text) {
    let warningElement = document.getElementById("validation-warning");
    warningElement.innerText = text;
}