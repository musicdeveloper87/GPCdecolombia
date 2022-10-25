<?php

include "dbconnection.php";

$Id=$_POST ["Id"];


$sql= "SELECT Id from userstd WHERE Id = '$Id' ";
$result =$pdo->query($sql);

if ($result ->rowCount()>0)
{
    $data =array ('done'=> true, "message"=>"Bienvenido $Id");
    Header('Content-Type:application/json');
    echo json_encode($data);
    exit();
}
else 
{
    $data= array ('done'=> false, "message"=>"usuario  incorrecto");
    Header('Content-Type:application/json');
    echo json_encode($data);
    exit();
}
?>