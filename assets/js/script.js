
function myFunction() {
    var name = document.getElementById("name").value;
    var text = document.getElementById("text").value;
    var foodOrdered = document.getElementById("foodOrdered").value;
    var foodquality = document.getElementById("foodquality").value;
    var orderaccuracy = document.getElementById("orderaccuracy").value;
    var valueformoney = document.getElementById("valueformoney").value;
    var speedofservice = document.getElementById("speedofservice").value;
    var overallexperience = document.getElementById("overallexperience").value;
    var serverName = document.getElementById("serverName").value;
    var additionalComments = document.getElementById("additionalComments").value;
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'name1=' + name + '&text1=' + text + '&foodOrdered1=' + foodOrdered + '&foodquality1=' + foodquality + '&orderaccuracy1=' + orderaccuracy + '&valueformoney1=' + valueformoney + '&speedofservice1=' + speedofservice + '&overallexperience1=' + overallexperience + '&serverName1=' + serverName + '&additionalComments' + additionalComments +; 
    if (name == '' || text == '' || foodOrdered == '' || foodquality == '' || orderaccuracy == '' || valueformoney == '' || speedofservice == '' || overallexperience == '' || serverName == '' || additionalComments == '' ||) {
    alert("Please Fill All Fields");
    } else {
    // AJAX code to submit form.
    $.ajax({
    type: "POST",
    url: "ajaxjs.php",
    data: dataString,
    cache: false,
    success: function(html) {
    alert(html);
    }
    });
    }
    return false;
    }



    
    