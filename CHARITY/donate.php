<?php

include 'db_connection.php';

$con=open();
date_default_timezone_set('Asia/Kolkata');
$date=date('Y-m-d');
$time=date("H:i:s");
$type=$_POST['type'];
$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];
$amount=$_POST['amount'];

$query="insert into info(type,name,email,number,amount,date,time) value('$type','$name','$email','$number','$amount','$date','$time')";

$result=mysqli_query($con,$query);

if(!$result){
    echo '<script>window.alert("There was some Technical Error.")';
}
else{
   echo '<script>window.alert("Successfull. Enter ur Email and download ur reciept now!!")
    window.location="redirect.html";</script>';
}

  
?>