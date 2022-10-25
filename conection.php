<?php
$conection=null;


$db_servidor="localhost";
$db_baseDatos="usergpc";
$db_usuario="root";
$db_password="";


try
{
$conection= new PDO ("mysql:host=localhost;dbname=usergpc","root","");
$conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conection->exec("set names utf8");
}catch(PDOException $e){

   echo "ERROR CONECTING  TO DATABASE", $e->getMessage();
    exit();
}
     return $conection;








?>