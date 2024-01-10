<?php


function open(){
    $db_host='localhost';
    $db_name='donation';
    $db_user='root';
    $db_pass='';
    $con=mysqli_connect($db_host,$db_user,$db_pass);
    if(!$con){
        echo 'not connected to the database';
        }

        mysqli_select_db($con,$db_name);
        return $con;
}

function close($con){
    mysqli_close($con);
}
?>