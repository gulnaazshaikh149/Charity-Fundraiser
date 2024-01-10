<html>
<style>
    body{
        background-color:whitesmoke;
    }
table {
border-collapse: collapse;
width: 70%;
font-family: monospace;
font-size: 15px;
text-align: center;
margin-left:170px;
margin-top:30px;
}
tr,td {
background-color:whitesmoke;
color:  #f5426f;
border: 3px solid black;
}
th{
    color:black;
    border: 3px solid black;
}
h1{
color:  #f5426f;
text-align:center;
font-family:monospace;
font-size:40px;
}
ul {
    list-style: none;
  }
nav {
display: flex;
justify-content: space-between;
align-items: center;
text-transform: uppercase;
font-weight: 600;
letter-spacing: 2px;
font-family: "calibri";
position: fixed;
top: 0;
left: 0;
width: 100%;
box-sizing: border-box;
padding: 10px 50px;
background-color: #fff;
box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.05);
z-index: 1;
height: 60px;
}

.menu {
  display: flex;
}
.menu li a {
  padding: 10px 15px;
  color: #6c707c;
  font-size: 12px;
}
.lang {
  color: #fff;
  font-size: medium;
}

.lang:hover {
  color: #f5426f;
  transition: all ease 0.5s;
}
.toggle {
  display: none;
}
.active a,
.menu li a:hover {
  background-color: #f5426f;
  color: #fff !important;
  font-weight: bold;
  transition: all ease 0.4s;
}
</style>
<body>
<section id="main">
        <nav>
            <img src="logo.png"><a href="#"></a>
            <div class="toggle"></div>
            <ul class="menu">
                <li class="active"><a href="admin.php">FUNDS</a></li>
                <li><a href="admin1.php">MESSAGES</a></li>
            </ul>
            
        </nav>
    </section>
    <br>
    <br>
    
    <h1>Messages</h1>
<table>
    <tr>
    <th>Date</th>
        <th>Name</th>
        <th>Email</th>
        <th>Contact </th>    
        <th>Messages</th>
        <th>Reply</th>

      
    </tr>
<?php

$connect = mysqli_connect("localhost", "root", "", "donation");
$result=mysqli_query($connect, "Select * from contact order by date desc");
if($result->num_rows>0){
    while($row = $result->fetch_assoc()) {
      $em=$row['email'];
        echo "<tr><td>" . $row["date"]. "</td><td>" . $row["name"] . "</td><td>"
        . $row["email"]. "</td><td>" . $row["number"]. "</td><td>" .$row["message"]. "</td>
        <td><a href='mailto:" . $em . "';>MAIL</a></td> </tr>";
        }
    echo " </table>";
  
    }
    else
   { echo " No result";
}

?>

</table>

</body>

