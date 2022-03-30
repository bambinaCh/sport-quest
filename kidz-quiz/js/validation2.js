/* THIS IS (_Sven_) PAGE */

function validateRadio() {

    let value = document.getElementById("radio").value;

    if (value == "") {
        setWarning("Please choose and click one answer!");

        return false;
    }
    else if (value === "Gold") {

        document.getElementsById("rings").value = 1;

    }
    else {
        document.getElementsById("rings").value = 0;
    }

}

function setWarning(text) {
    let warningElement = document.getElementById("validation-warning");
    warningElement.innerText = text;
}