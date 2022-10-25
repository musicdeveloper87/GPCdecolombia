<?php
include ("ValidacionBd.php");

$Aname=$_POST['Name'];
$ALastname=$_POST['Lastname'];
$Adocumento=$_POST['Id'];
$AGender=$_POST['Gender'];
$Aage=$_POST['Age'];
$APais=$_POST['Country'];
$Aempre=$_POST['Company'];
$AEmail=$_POST['Mail'];
$APass=$_POST['Password'];
$AInicio=$_POST['FechaInicio'];
$AFinal=$_POST['FechaFinal'];
$Id_rol=$_POST['Id_rol'];
$Logo=addslashes(file_get_contents($_FILES['Logo']['tmp_name']));
$query=$conn->query("SELECT * from userstd ");
$mpassword=md5($APass);
$conn->query("INSERT INTO userstd (Id, Name,Lastname,Gender,Age,Country,Company,Mail,Password,Id_rol,FechaInicio,FechaFinal,Logo) values ('$Adocumento', '$Aname','$ALastname','$AGender','$Aage','$APais','$Aempre','$AEmail','$mpassword','$Id_rol','$AInicio','$AFinal','$Logo')");
 
 if ($query){
    header("Location:Admin.php");
 }else{

 }


?>