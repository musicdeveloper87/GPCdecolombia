<?php
include("ValidacionBd.php");
if (isset($_REQUEST['agregarlogo']))
{
$nombre_imagen=$_FILES['Logo']['name'];
$Temporal=$_FILES['Logo']['tmp_name'];
$carpeta='/imag';
$ruta=$carpeta.'/'.$nombre_imagen;
move_uploaded_file($Temporal,$carpeta.'/'.$nombre_imagen);
$query="INSERT INTO userstd (Logo)VALUES ($ruta)";
$execute=mysqli_query($conn,$query) or die(mysqli_error($conn));
if ($execute){
    header ("Location:admin.php");
}else{
echo "hubo un error";
    }

}



?>