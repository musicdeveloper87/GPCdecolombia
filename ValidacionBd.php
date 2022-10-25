<?php


$conn=new mysqli("localhost","root","","usergpc");
if ($conn->connect_error){

die ("Connection failed:".$conn->connect_error);
}
?>
