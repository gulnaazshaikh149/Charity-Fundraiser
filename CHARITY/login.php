<?php

$conn=mysqli_connect('localhost','root' , '' , 'donation');
if(isset($_POST['username'])){
$username = $_POST['username'];
$password = $_POST['password'];
$sql="select * from login where username='$username' && password='$password'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
if ($row['username'] == $username && $row['password'] == $password)
    
{
    echo'<script type="text/javascript">alert("Login successful!!  Welcome");</script>';
    echo '<script> location.href = "admin.php"; </script> ';
}
else{
    echo'<script type="text/javascript">alert("check your login credentials");</script>';
    echo '<script> location.href = "project.html"; </script> ';

}
}
?>