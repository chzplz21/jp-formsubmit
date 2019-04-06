$( document ).ready(function() {
var form = document.getElementsByTagName("input");
for (let inputField of form) {
    
     inputField.value = "yo";
     //inputField.setRangeText("text"); 
}


var submitButton = document.getElementById("submitButton");

var event = new CustomEvent("click");
submitButton.dispatchEvent(event);

var theForm = document.getElementById("mainForm").elements;

var arrayHolder = [];
for (var i = 0 ; i < theForm.length ; i++) {
    var item = theForm.item(i);
    //If the input field has a measurement type (%, Fahrenheit, etc.)
    if (item.dataset.measurementname != undefined) {
        var measurementName = item.dataset.measurementname;
        //append measurement type to input value
        item.value = item.value + " " + measurementName;
        
    }
    var vmodel = item.getAttribute("v-model");
    arrayHolder[i] = {name: vmodel, value: item.value};
}

//arrayHolder = JSON.stringify(arrayHolder);

arrayHolder = JSON.stringify(arrayHolder);


submitForm(arrayHolder);



function submitForm(arrayHolder) {
 
  //$.post('submit.php', {elements: arrayHolder});
  
    $.ajax({
        type: 'POST', 
        url : "submit.php",
        data: {mydata: arrayHolder},
       //data: arrayHolder,
      
        success : function () {
           console.log("yes")
         
        },
        error : function(request,error)
        {
            console.log(error);
        }
      });
      


}





});
//console.log(theForm);

/*

console.log(theForm);
*/


/*
function yo(formData) {
    console.log(formData)
  
}
*/



