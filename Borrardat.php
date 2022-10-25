
<?php 
include("ValidacionBd.php");
$id = $_GET['id'];

$sql=("DELETE  from userstd where Id='$id'");
$query=mysqli_query($conn,$sql);
if($query){
header("Location:Admin.php");
}


?>
