<?php
include("templates/Cabecerausuario.php");
include("ValidacionBd.php");
session_start();
if(!isset($_SESSION['Id'])){
  header("location:LoginUser.php");
}
$User=$_SESSION['Id'];
$sql="SELECT Id, Name,Lastname,Company,Mail,Age,Country,Gender FROM userstd where Id ='$User'";
$resultado=$conn->query($sql);
$row=$resultado->fetch_assoc();
  



?>
<div class="row">
  <div class="col-sm-3">
    <div class="card">
      
    
    
    <div class="card-body">
      <h4 class="card-title">BIENVENID@:    <?php echo ($row['Name']); ?>    <?php echo ($row['Lastname']);?> <div></div></h4>

            
            <p>EMPRESA</p>
            <input class="form-control" type="text" value= <?php  echo $row['Company'] ?> aria-label="readonly input example" readonly>
            <p>PAIS</p>
            <input class="form-control" type="text" value= <?php  echo $row['Country'] ?> aria-label="readonly input example" readonly>
            <p>DOCUMENTO DE IDENTIDAD</p>
            <input class="form-control" type="text" value= <?php  echo $row['Id'] ?> aria-label="readonly input example" readonly>
            <p>CORREO ELECTRONICO</p>
            <input class="form-control" type="text" value= <?php  echo $row['Mail'] ?> aria-label="readonly input example" readonly>
            <p>FECHA DE NACIMIENTO</p>
            <input class="form-control" type="text" value= <?php  echo $row['Age'] ?> aria-label="readonly input example" readonly>
            <p>GENERO</p>
            <input class="form-control" type="text" value= <?php  echo $row['Gender'] ?> aria-label="readonly input example" readonly>
            <br>
            <br>
    </nav>
      <th><a href="Actudatusu.php?id=<?php echo $row['Id'] ?> " class="btn btn" style="background-color:rgb(205,220,57,255)">ACTUALIZAR DATOS</a></th>
      </div>
      </div>          

  </div>
   
<div class="col-sm-5">
    <div class="card">
      <div class="card-body">
   
    
      <h5 class="card-title">MIS ESTADISTICAS</h5>
      <p class="card" ></p><img src="imag/metricas.jpg" height="500"alt="12"></p>
      <th><a href="Historial.php?id=<?php echo $row['Id'] ?> " class="btn btn" style="background-color:rgb(205,220,57,255)">HISTORIAL DE ENTRENAMIENTO</a></th>
      
    </div>
  </div>
</div>
<?php 
$User=$_SESSION['Id'];
$sql="SELECT Promedio FROM score where Id_score ='$User'";
$resultado=$conn->query($sql);
$row=$resultado->fetch_assoc();
  


?>
<div class="col-sm-4">
    <div class="card">
      <div class="card-body">
      <h5 class="card-title">ESTADO</h5>
      <p class="card-text">POLIGONO FIJO 28% </p>
      <div class="progress">
<div class="progress-bar w-25 " Color="rgba(200,0,0,0.2)"role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p class="card-text">POLIGONO MOVIl  52%</p>
<div class="progress">
<div class="progress-bar w-50" Color="rgba(0,0,200,0.2)" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>     
</div>
<br>

      
    </div>
  </div>
  </div>
</div>
