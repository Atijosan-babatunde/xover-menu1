
function myFunction() {
    var name = document.getElementById("name").value;
    var text = document.getElementById("text").value;
    var inputGrade = document.getElementById("inputGrade").value;
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'name1=' + name + '&text1=' + text + '&inputGrade1=' + inputGrade; 
    if (name == '' || text == '' || inputGrade == '') {
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



    
    