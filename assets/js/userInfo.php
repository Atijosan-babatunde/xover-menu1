<?php

include('db.php');

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $foodOrdered = $_POST['foodOrdered'];
    $inputGrade = $_POST['inputGrade'];
    $serverName = $_POST['serverName'];
    $additionalComments = $_POST['additionalComments'];

    $sql = mysqli_query($conn, "INSERT INTO user (name,foodOrdered,inputGrade,serverName,additionalComments) VALUES('$name','$foodOrdered','$inputGrade','$serverName','$additionalComments')");
    if($sql)
    {
        echo '<script>'; 
echo 'alert("Thank you!.  Your answers were submitted successfully.");'; 
echo 'window.location.href = "/../xover-menu/feedback.html";';
echo '</script>'; 
    }else{
        echo '<script>'; 
        echo 'alert("AN ERROR OCCURED");'; 
        echo 'window.location.href = "/../xover-menu/feedback.html";';
        echo '</script>'; 
    }
}
?>