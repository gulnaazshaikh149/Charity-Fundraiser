
<?php

$connect = mysqli_connect("localhost", "root", "", "donation");
$email=$_POST['email'];
$result="Select *from info where email= '$email'";
$query=mysqli_query($connect,$result);
if($query->num_rows>0){
    while($row = $query->fetch_assoc()) {
 
?>
<html>
    <head>
    <link rel="stylesheet" href="reciept.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<h1><section id="main">
        <nav>
            <img src="logo.png"><a href="#"></a>
            <div class="toggle"></div></h1>
    </head>
    <body>
        <center>
  <bR><br><br>
  <div class="donation">DONATION RECIEPT</div>
  <br>
  <br>
  <h3>  Thank you for your gift! 
<br><br>
The amount you have given will make a difference as the proceeds will go help 
the particular cause you've selected, thus helping us make this world a better place.
<br> <br>
This receipt is an attestation that we have gratefully received your generous contribution
 to our humble institution. Keep this receipt for your tax deduction purposes.
 <br>
    </h3>
   <h2>DONOR NAME:</h2>
    <?php echo $row['name'] ;?>  <br>
  <h2>CAUSE:</h2>
   <?php echo  $row['type'] ;?> <br>
<h2> AMOUNT:</h2>
   <?php echo  $row['amount']; ?> <br>
<h2> DATE:</h2>
   <?php echo  $row['date']; ?>
   <br>
   <br>
   <button class="submit" onclick="window.print()">PRINT</button>
    </center>
</body>
</html>
<?php
    }
}

?>