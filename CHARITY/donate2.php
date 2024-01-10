<?php

include 'db_connection.php';

$con=open();
if(isset($_POST['submit'])){


date_default_timezone_set('Asia/Kolkata');
$date=date('Y-m-d');
$time=date("H:i:s");
$type= mysqli_real_escape_string($con, $_POST['type']);
$name=mysqli_real_escape_string($con, $_POST['name']);
$email= mysqli_real_escape_string($con, $_POST['email']);
$number=mysqli_real_escape_string($con, $_POST['number']);
$amount=mysqli_real_escape_string($con, $_POST['amount']);

$query="insert into info(type,name,email,number,amount,date,time) value('$type','$name','$email','$number','$amount','$date','$time')";

$result=mysqli_query($con,$query);

if(!$result){
    echo '<script>window.alert("There was some Technical Error.")';
}
else{
   echo '<script>window.alert("Successful. Enter your Email and print your reciept now!!")
    window.location="redirect.html";</script>';
}

}
if(isset($_POST['type']) == 1){         
  $username =$_POST['username'];          
  $query ="SELECT * FROM info WHERE email='$username'";         
  $result =mysqli_query($con, $query);         
  $rowcount=mysqli_num_rows($result);         
  if($rowcount >0){             
    echo "<span class='status-available'> You have Donated $rowcount time(s) before</span>";         
  }else{              
    echo "<span class='status-available'> Happy to have your first Donation.</span>";         
  }    

}  
?>
