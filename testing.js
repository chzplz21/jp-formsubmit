
/*
var form = document.getElementsByTagName("input");
for (let inputField of form) {
     if  ( inputField.type == "checkbox") {
        inputField.checked = true;
     } else {
        inputField.value = "yo";
     }
     
}
*/


var submitButton = document.getElementById("submitButton");
console.log(submitButton)
var event = new CustomEvent("click");
submitButton.dispatchEvent(event);





