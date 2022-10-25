<!DOCTYPE html>
<html lang=”en”>
<head>
    <meta charset=”UTF-8″ />
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>GPC DE COLOMBIA</title>
<link rel="stylesheet" href="Estiloscss/estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <script src=https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js></script>
     
</head>
<body> 
<nav class="navbar navbar-expand-lg " style="background-color:rgb(80,137,242,255)">
    
<ul class="navbar-brand"><img src="imag/gpclogo.jpg" height="90"alt="12"></ul>
<ul class="navbar-brand" style="color:white" >PLATAFORMA DE ENTRENAMIENTO Y SEGURIDAD DE ARMAS CORTAS</ul>
<ul class="navbar navbar-nav">
   <li class="nav-item ">
    <a class="nav-link" style="color:white" href="#">PREGUNTAS FRECUENTES</a>
   </li>
   <li class="nav-item ">
    <a class="nav-link" style="color:white" href="#">AYUDA</a>
   </li>
 <li class="nav-item ">
    <a class="nav-link" style="color:white" href="Admin2.php">INICIO</a>
   </li>
<li class="nav-item ">
            <a class="nav-link text-right" style="color:white" href="salir.php"onclick="return confirm('Estás seguro que deseas salir?');">SALIR</a>
        </li>
   </ul>
</nav>






<?php
	
    include("bdreg.php");
	$con=conectar();
	$id = $_GET['id'];
    $sql="SELECT * from userstd where Id='$id'";
	$query=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($query);
?>

<header>
        <h1 class="text-center">REGISTROS DE USUARIO  </h1>
    </header>
<div class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">

  <header>
        <h1>DATOS  </h1>
    </header>
    
    <nav >
    
            <p>NOMBRES</p>
            <input class="form-control" type="text" value= <?php  echo $row['Name'] ?> aria-label="readonly input example" readonly>
            <p>APELLIDOS</p>
            <input class="form-control" type="text" value= <?php  echo $row['Lastname'] ?> aria-label="readonly input example" readonly>
            <p>EMPRESA</p>
            <input class="form-control" type="text" value= <?php  echo $row['Company'] ?> aria-label="readonly input example" readonly>
            <p>PAIS</p>
            <input class="form-control" type="text" value= <?php  echo $row['Country'] ?> aria-label="readonly input example" readonly>
            <p>APROBADO</p>
            <input class="form-control" type="text" value= <?php  echo $row['Aprovado'] ?> aria-label="readonly input example" readonly>
            <p>LICENCIA</p>
            <input class="form-control" type="text" value= <?php  echo $row['FechaFinal'] ?> aria-label="readonly input example" readonly>
            <p>DOCUMENTO</p>
            <input class="form-control" type="text" value= <?php  echo $row['Id'] ?> aria-label="readonly input example" readonly>
    </nav>
</div>  
</div>
</div>
<body>
    
<div class="col-sm-4">
    <div class="card">
      <div class="card-body">

    
    <header>
        <h1 class="text-center">ESTADISTICA  </h1>
    </header>
    
      <canvas id="marksChart" width="100" height="100"></canvas>
    
</div>
</div>
</div>

<?php
	

	$id = $_GET['id'];
    $sql="SELECT Fecha_exp , Distancia ,Promedio from score where Id_score='$id'";
	$query=mysqli_query($con,$sql);
	
?>
<div class="col-sm-4">
    <div class="card">
      <div class="card-body">
     
    <header>
        <h1 class="text-center"> HISTORIAL</h1>
    </header>
    <table class="table table-light">
            <thead class="thead-light">
            <th>FECHA</th>
                <th>PROMEDIO</th>
                <th>DISTANCIA</th>
                </tr>
         </thead>
         <tbody>
    <?php  while ($registros=mysqli_fetch_array($query)){?>
      <tr>
      
      <th><?php echo $registros ["Fecha_exp"]?></th>
      <th><?php echo $registros ["Promedio"]?></th>
      <th><?php echo $registros ["Distancia"]?><?php }?></th>
     
        </tbody>
        <div  >                        
    <p>Seleccione una fecha de experiencia en el  siguiente menú:</p>
    <p>Fechas:
    </p>
    <form method="POST" class="form-search" >

      <select name='busqfech'>
        <option value="0">Seleccione:</option>
        <?php
        $id = $_GET['id'];
          $sql="SELECT * FROM Score where Id_score='$id'";
          $query=mysqli_query($con,$sql);
	
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores["Fecha_exp"].'">'.$valores["Fecha_exp"].'</option>';}
        ?>
      </select>
      
    <input  type="submit" name="buscar" class="btn_search" value="Buscar"></input>
    </form>
    
  </div>
  </div>
</div>
</div>
</div>
  
</body>
<script src=https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js></script>

<script>
var marksCanvas = document.getElementById("marksChart");

var marksData = {
  labels: ["PRECISIÓN", "TIEMPO", "AREA INSEGURA", "PRESIÓN GATILLO", "DESACATO", "CONCENTRACIÓN"],
  datasets: [{
    label: "POLÍGONO FIJO A",
    backgroundColor: "rgba(200,0,0,0.2)",
    data: 
    <?php 
    if(isset($_POST['buscar'])){
       
    $busqfech=$_POST['busqfech'];
  $id = $_GET['id'];
  $sql="SELECT * FROM score where Id_score='$id' and Fecha_exp='$busqfech'";
    $query=mysqli_query($con,$sql);
    }
    ?>

   [<?php  while ($registros=mysqli_fetch_array($query)){?><?php echo $registros ["Precision_fijo"]?>,
    <?php echo $registros ["Tiempo"]?>,<?php echo $registros ["Area_insegura"]?>,<?php echo $registros ["Presion_gatillo"]?>,
    <?php echo $registros ["Desacato"]?>,<?php echo $registros ["Concentracion"]?><?php }?>]
   
  }, {
    label: "POLIGONO MÓVIL",
    backgroundColor: "rgba(0,0,200,0.2)",
    data: 
    <?php 
    if(isset($_POST['buscar'])){
       
      $busqfech=$_POST['busqfech'];
    	$id = $_GET['id'];
    $sql="SELECT * FROM score where Id_score='$id'and Fecha_exp='$busqfech'";
    $query=mysqli_query($con,$sql);
    }
    ?>
    [<?php  while ($registros=mysqli_fetch_array($query)){?><?php echo $registros ["Presicion_m"]?>,
    <?php echo $registros ["Tiempo_m"]?>,
    <?php echo $registros ["Areainseg_m"]?>,
    <?php echo $registros ["Presiongat_m"]?>,
    <?php echo $registros ["Desacato_m"]?>,
    <?php echo $registros ["Concentracion_m"]?><?php }?>]


  }]
};

var radarChart = new Chart(marksCanvas, {
  type: 'radar',
  data: marksData
});
 
</script>
<?php 

if(isset($_POST['certificar'])){
    $id = $_GET['id'];
    $sql="SELECT MAX(`Promedio`) AS `Promedio`from score where Id_score=$id";
    $query=mysqli_query($con,$sql);
    if (['Promedio']<80){
        echo ("TE PUEDES CERTIFICAR");
   }else{
    echo("NO CUMPLES CON EL PUNTAJE PARA CERTIFICAR");
   }
   
};



?>
<div class="container mlogin">
    
        <div id="certificar">
    <h1 > CERTIFICACIÓN</h1>
        <form name="loginform" id="loginform" action="" method="POST">
        
       
        <p class="submit">
            <input  type="submit" name="certificar" class="btn btn" style="background-color:rgb(205,220,57,255)" value="GENERAR CERTIFICADO"/>
            </p>
            
        </form>
</div>
        </div>