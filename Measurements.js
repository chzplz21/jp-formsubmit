//Appends Measurements to submitted values
var Measurements =  {
    
  
    getMeasured: function(data) {
        var theForm = document.getElementById("mainForm").elements;

        for (var i = 0 ; i < theForm.length ; i++) {
            var item = theForm.item(i);
            if (item.dataset.measurementname != undefined) {
                var measurementName = item.dataset.measurementname
                data = this.addMeasurement(item, data, measurementName);
                
            }

        }

        return data;

    },
    

    addMeasurement: function(item, data, measurementName) {
        var attributeName = item.getAttribute("name");
        
        for (var property in data) {
            if (attributeName == property) {
                if (data[property].indexOf(measurementName) == -1) {
                    var measure = " " + measurementName;
                    data[property] += measure;
                }
            }
        }

        return data;
        
    }


}