/* THIS IS (_Sven_) PAGE */

function validateRadio() {

    let radios = document.querySelectorAll("input[type=radio]:checked");

    if (radios.length !== 1) {
        setWarning("Please choose and click one answer!");

        return false;
    }

    if (radios[0].id === "butt2_Gold"){
    
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