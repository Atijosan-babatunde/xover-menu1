<?php

include('db.php');

if(isset($_POST['submit']))
{

    $msg="Name: ".$_POST['name']."\n"."Food Order: ".$_POST['foodOrdered']."\n"."Food Quality: ".$_POST['foodquality']."\n"."Order Accuracy: ".$_POST['orderaccuracy']."\n"."Value For Money: ".$_POST['valueformoney']. "\n"."speed of service: ".$_POST['speedofservice']. "\n"."over all experience:".$_POST['overallexperience']. "\n"."server name:".$_POST['serverName']."\n"."additional comments:".$_POST['additionalComments'];

// use wordwrap() if lines are longer than 70 characters
     $msg = wordwrap($msg,70);

// send email
     mail("mabonks@yahoo.com","My subject",$msg);

    $name = $_POST['name'];
    $foodOrdered = $_POST['foodOrdered'];
    $foodquality = $_POST['foodquality'];
    $orderaccuracy = $_POST['orderaccuracy'];
    $valueformoney = $_POST['valueformoney'];
    $speedofservice = $_POST['speedofservice'];
    $overallexperience = $_POST['overallexperience'];
    $serverName = $_POST['serverName'];
    $additionalComments = $_POST['additionalComments'];

    $sql = mysqli_query($conn, "INSERT INTO user (name,foodOrdered,foodquality,orderaccuracy,valueformoney,speedofservice,overallexperience,serverName,additionalComments) VALUES('$name','$foodOrdered','$foodquality','$orderaccuracy','$valueformoney','$speedofservice','$overallexperience','$serverName','$additionalComments')");
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








