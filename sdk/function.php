<?php
// include("config.php");
function setData($name,$email,$subject,$message){
    include("config.php");
    $conn = new mysqli($hostName,$userName,$password,$databaseName);
    if($conn->connect_error){
        echo "Database Not Connected.";
    }
    date_default_timezone_set("Asia/Kolkata");
    $datetime = date("jS \of F Y h:i:s A");
    $insert_sql = "insert into inquiry(name,email,subject,message,datetime) VALUES('$name','$email','$subject','$message','$datetime')";
    if($conn->query($insert_sql)===TRUE){
        echo "Messsage Sent Sucessfully.";
    }
    else{
        echo "Messsage Sent Failed.";
    }
    $conn->close();
}
?>