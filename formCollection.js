var theForm = document.getElementById("mainForm").elements;
var arrayHolder = [];
for (var i = 0 ; i < theForm.length ; i++) {

    var item = theForm.item(i);
    var vmodel = item.getAttribute("v-model");
    //If multi select
    if (item.type == "checkbox") {
       arrayHolder =  addToCheckSelect(item, vmodel, arrayHolder);

    } else {
        arrayHolder[i] = {name: vmodel, value: item.value};
    }

    //If the input field has a measurement type (%, Fahrenheit, etc.)
    if (item.dataset.measurementname != undefined) {
        var measurementName = item.dataset.measurementname;
        //append measurement type to input value
        item.value = item.value + " " + measurementName;    
    }
    
    
  
    
}

//If multi select
function addToCheckSelect(item, vmodel, arrayHolder) {
   
    for (let i = 0; i < arrayHolder.length; i++) {
        console.log(arrayHolder[i].name);
        if (arrayHolder[i].name == vmodel) {
            arrayHolder[i].value += "," + item.value;
            break;
        } else {
            arrayHolder.push({name: vmodel, value: item.value});
            break;
        }
    }
    return arrayHolder;
}



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



