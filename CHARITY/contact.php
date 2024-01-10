<?php

include 'db_connection.php';

$con=open();
date_default_timezone_set('Asia/Kolkata');
$date=date('Y-m-d');
$time=date("H:i:s");
$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];
$message=$_POST['message'];

$query="insert into contact(name,email,number,message,date,time) value('$name','$email','$number','$message','$date','$time')";

$result=mysqli_query($con,$query);

if(!$result){
    echo '<script>window.alert("There was some Technical Error.")';
}
else{
   echo '<script>window.alert("Successfull.")
    window.location="contact.html"</script>';;
}

?>