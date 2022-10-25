<?php
include("bdreg.php");
$con=conectar();
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
$mpassword=md5($Apass);
$sql="UPDATE  userstd SET  Name ='$Aname', Lastname='$ALastname',Gender='$AGender',Age='$Aage',Country='$APais',Company='$Aempre',Mail='$AEmail',Password='$mpassword',FechaInicio='$AInicio',FechaFinal='$AFinal' where Id='$Adocumento'";

$query=mysqli_query($con,$sql);
if ($query){
    header("location:admin.php");
}
else{

}



?>





