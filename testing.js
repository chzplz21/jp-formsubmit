
var Testing = {

   addDummy: function() {

      var form = document.getElementsByTagName("input");
      for (let inputField of form) {
        
         if  ( inputField.type == "checkbox") {
            inputField.checked = true;
         } else {
            console.log("sf")
            inputField.value = "yo";
         }
         
      }

   },
 


   testSubmit: function() {
  
      var submitButton = document.getElementById("submitButton");
      console.log(submitButton)
      var event = new CustomEvent("click");
      submitButton.dispatchEvent(event);
   },


   submitForm: function() {
      
        $.ajax({
            type: 'POST', 
            url : "submit.php",
            data: {mydata: "boo"},
          
            success : function () {
               console.log("yes")
             
            },
            error : function(request,error)
            {
                console.log(error);
            }
          });
          
    }






}






