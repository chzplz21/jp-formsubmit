function yo(data) {
    
  

    var theForm = document.getElementById("mainForm").elements;
    var arrayHolder = [];
    for (var i = 0 ; i < theForm.length ; i++) {
        var item = theForm.item(i);
        if (item.dataset.measurementname != undefined) {
           var measurementName = item.dataset.measurementname
            data = addMeasurement(item, data, measurementName);
            //append measurement type to input value
            //item.value = item.value + " " + measurementName;    
        }

    }

    return data;
    
}



function addMeasurement(item, data, measurementName) {
    var attributeName = item.getAttribute("name");
    
    for (var property in data) {
        if (attributeName == property) {
            var measure = " " + measurementName;
            data[property] += measure;
        }
    }

    return data;
    
}