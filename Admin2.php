
<?php
include("templates/CabeceraSadm2.php");
include("ValidacionBd.php");

session_start();

if(!isset($_SESSION['Company'])){
  header("location:LoginUser.php");
  
}
$Company=$_SESSION['Company'];


$sql="SELECT * from userstd where Company='$Company' ";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);

?>

<div class="container ml-0 "  >
<h1 class="card-title">BIENVENID@ ADMINISTRADOR:        <?php echo $Company;?> <div></div></h1>

 

    <div class="row">
     <div class= "col-md-2"  >
        <h2> CREAR</h2>
        <h3 > USUARIO </h3>
        <form action="Insertaradm2.php" method="POST">
        <input  type="text" class="form-control mb-3" name="Name" placeholder="Nombres">
        <input type="text" class="form-control mb-3" name="Lastname" placeholder="Apellidos ">
        <input type="text" class="form-control mb-3" name="Id" placeholder="Documento ">
        <p>FECHA DE NACIMIENTO</p>
        <input type="date" class="form-control mb-3" name="Age" placeholder="Fecha de nacimiento">
        <p>EMPRESA</p>
        <input type="text" class="form-control mb-3" name="Company" readonly onmousedown="return false;" value=<?php echo ($row['Company']);?>>
        <p>
     <label for="user login">PAIS<br>
    <select class="w-75"name="Country" >
<option value="AF">Afganistán</option>
<option value="AL">Albania</option>
<option value="DE">Alemania</option>
<option value="AD">Andorra</option>
<option value="AO">Angola</option>
<option value="AI">Anguilla</option>
<option value="AQ">Antártida</option>
<option value="AG">Antigua y Barbuda</option>
<option value="AN">Antillas Holandesas</option>
<option value="SA">Arabia Saudí</option>
<option value="DZ">Argelia</option>
<option value="argentina">Argentina</option>
<option value="AM">Armenia</option>
<option value="AW">Aruba</option>
<option value="AU">Australia</option>
<option value="AT">Austria</option>
<option value="AZ">Azerbaiyán</option>
<option value="BS">Bahamas</option>
<option value="BH">Bahrein</option>
<option value="BD">Bangladesh</option>
<option value="BB">Barbados</option>
<option value="BE">Bélgica</option>
<option value="BZ">Belice</option>
<option value="BJ">Benin</option>
<option value="BM">Bermudas</option>
<option value="BY">Bielorrusia</option>
<option value="MM">Birmania</option>
<option value="bolivia">Bolivia</option>
<option value="BA">Bosnia y Herzegovina</option>
<option value="BW">Botswana</option>
<option value="brasil">Brasil</option>
<option value="BN">Brunei</option>
<option value="BG">Bulgaria</option>
<option value="BF">Burkina Faso</option>
<option value="BI">Burundi</option>
<option value="BT">Bután</option>
<option value="CV">Cabo Verde</option>
<option value="KH">Camboya</option>
<option value="CM">Camerún</option>
<option value="CA">Canadá</option>
<option value="TD">Chad</option>
<option value="chile">Chile</option>
<option value="CN">China</option>
<option value="CY">Chipre</option>
<option value="VA">Ciudad del Vaticano (Santa Sede)</option>
<option value="colombia" selected>Colombia</option>
<option value="KM">Comores</option>
<option value="CG">Congo</option>
<option value="CD">Congo, República Democrática del</option>
<option value="KR">Corea</option>
<option value="KP">Corea del Norte</option>
<option value="CI">Costa de Marfíl</option>
<option value="costa rica">Costa Rica</option>
<option value="HR">Croacia (Hrvatska)</option>
<option value="CU">Cuba</option>
<option value="DK">Dinamarca</option>
<option value="DJ">Djibouti</option>
<option value="DM">Dominica</option>
<option value="ecuador">Ecuador</option>
<option value="EG">Egipto</option>
<option value="el salvador">El Salvador</option>
<option value="AE">Emiratos Árabes Unidos</option>
<option value="ER">Eritrea</option>
<option value="SI">Eslovenia</option>
<option value="españa" >España</option>
<option value="US">Estados Unidos</option>
<option value="EE">Estonia</option>
<option value="ET">Etiopía</option>
<option value="FJ">Fiji</option>
<option value="PH">Filipinas</option>
<option value="FI">Finlandia</option>
<option value="FR">Francia</option>
<option value="GA">Gabón</option>
<option value="GM">Gambia</option>
<option value="GE">Georgia</option>
<option value="GH">Ghana</option>
<option value="GI">Gibraltar</option>
<option value="GD">Granada</option>
<option value="GR">Grecia</option>
<option value="GL">Groenlandia</option>
<option value="GP">Guadalupe</option>
<option value="GU">Guam</option>
<option value="guatemala">Guatemala</option>
<option value="GY">Guayana</option>
<option value="GF">Guayana Francesa</option>
<option value="GN">Guinea</option>
<option value="GQ">Guinea Ecuatorial</option>
<option value="GW">Guinea-Bissau</option>
<option value="HT">Haití</option>
<option value="honduras">Honduras</option>
<option value="HU">Hungría</option>
<option value="IN">India</option>
<option value="ID">Indonesia</option>
<option value="IQ">Irak</option>
<option value="IR">Irán</option>
<option value="IE">Irlanda</option>
<option value="BV">Isla Bouvet</option>
<option value="CX">Isla de Christmas</option>
<option value="IS">Islandia</option>
<option value="KY">Islas Caimán</option>
<option value="CK">Islas Cook</option>
<option value="CC">Islas de Cocos o Keeling</option>
<option value="FO">Islas Faroe</option>
<option value="HM">Islas Heard y McDonald</option>
<option value="FK">Islas Malvinas</option>
<option value="MP">Islas Marianas del Norte</option>
<option value="MH">Islas Marshall</option>
<option value="UM">Islas menores de Estados Unidos</option>
<option value="PW">Islas Palau</option>
<option value="SB">Islas Salomón</option>
<option value="SJ">Islas Svalbard y Jan Mayen</option>
<option value="TK">Islas Tokelau</option>
<option value="TC">Islas Turks y Caicos</option>
<option value="VI">Islas Vírgenes (EEUU)</option>
<option value="VG">Islas Vírgenes (Reino Unido)</option>
<option value="WF">Islas Wallis y Futuna</option>
<option value="IL">Israel</option>
<option value="IT">Italia</option>
<option value="JM">Jamaica</option>
<option value="JP">Japón</option>
<option value="JO">Jordania</option>
<option value="KZ">Kazajistán</option>
<option value="KE">Kenia</option>
<option value="KG">Kirguizistán</option>
<option value="KI">Kiribati</option>
<option value="KW">Kuwait</option>
<option value="LA">Laos</option>
<option value="LS">Lesotho</option>
<option value="LV">Letonia</option>
<option value="LB">Líbano</option>
<option value="LR">Liberia</option>
<option value="LY">Libia</option>
<option value="LI">Liechtenstein</option>
<option value="LT">Lituania</option>
<option value="LU">Luxemburgo</option>
<option value="MK">Macedonia, Ex-República Yugoslava de</option>
<option value="MG">Madagascar</option>
<option value="MY">Malasia</option>
<option value="MW">Malawi</option>
<option value="MV">Maldivas</option>
<option value="ML">Malí</option>
<option value="MT">Malta</option>
<option value="MA">Marruecos</option>
<option value="MQ">Martinica</option>
<option value="MU">Mauricio</option>
<option value="MR">Mauritania</option>
<option value="YT">Mayotte</option>
<option value="méxico">México</option>
<option value="FM">Micronesia</option>
<option value="MD">Moldavia</option>
<option value="MC">Mónaco</option>
<option value="MN">Mongolia</option>
<option value="MS">Montserrat</option>
<option value="MZ">Mozambique</option>
<option value="NA">Namibia</option>
<option value="NR">Nauru</option>
<option value="NP">Nepal</option>
<option value="nicaragua">Nicaragua</option>
<option value="NE">Níger</option>
<option value="NG">Nigeria</option>
<option value="NU">Niue</option>
<option value="NF">Norfolk</option>
<option value="NO">Noruega</option>
<option value="NC">Nueva Caledonia</option>
<option value="NZ">Nueva Zelanda</option>
<option value="OM">Omán</option>
<option value="NL">Países Bajos</option>
<option value="panamá">Panamá</option>
<option value="PG">Papúa Nueva Guinea</option>
<option value="PK">Paquistán</option>
<option value="paraguay">Paraguay</option>
<option value="perú">Perú</option>
<option value="PN">Pitcairn</option>
<option value="PF">Polinesia Francesa</option>
<option value="PL">Polonia</option>
<option value="PT">Portugal</option>
<option value="puerto rico">Puerto Rico</option>
<option value="QA">Qatar</option>
<option value="UK">Reino Unido</option>
<option value="CF">República Centroafricana</option>
<option value="CZ">República Checa</option>
<option value="ZA">República de Sudáfrica</option>
<option value="república dominicana">República Dominicana</option>
<option value="SK">República Eslovaca</option>
<option value="RE">Reunión</option>
<option value="RW">Ruanda</option>
<option value="RO">Rumania</option>
<option value="RU">Rusia</option>
<option value="EH">Sahara Occidental</option>
<option value="KN">Saint Kitts y Nevis</option>
<option value="WS">Samoa</option>
<option value="AS">Samoa Americana</option>
<option value="SM">San Marino</option>
<option value="VC">San Vicente y Granadinas</option>
<option value="SH">Santa Helena</option>
<option value="LC">Santa Lucía</option>
<option value="ST">Santo Tomé y Príncipe</option>
<option value="SN">Senegal</option>
<option value="SC">Seychelles</option>
<option value="SL">Sierra Leona</option>
<option value="SG">Singapur</option>
<option value="SY">Siria</option>
<option value="SO">Somalia</option>
<option value="LK">Sri Lanka</option>
<option value="PM">St Pierre y Miquelon</option>
<option value="SZ">Suazilandia</option>
<option value="SD">Sudán</option>
<option value="SE">Suecia</option>
<option value="CH">Suiza</option>
<option value="SR">Surinam</option>
<option value="TH">Tailandia</option>
<option value="TW">Taiwán</option>
<option value="TZ">Tanzania</option>
<option value="TJ">Tayikistán</option>
<option value="TF">Territorios franceses del Sur</option>
<option value="TP">Timor Oriental</option>
<option value="TG">Togo</option>
<option value="TO">Tonga</option>
<option value="TT">Trinidad y Tobago</option>
<option value="TN">Túnez</option>
<option value="TM">Turkmenistán</option>
<option value="TR">Turquía</option>
<option value="TV">Tuvalu</option>
<option value="UA">Ucrania</option>
<option value="UG">Uganda</option>
<option value="Uruguay">Uruguay</option>
<option value="UZ">Uzbekistán</option>
<option value="VU">Vanuatu</option>
<option value="venezuela">Venezuela</option>
<option value="VN">Vietnam</option>
<option value="YE">Yemen</option>
<option value="YU">Yugoslavia</option>
<option value="ZM">Zambia</option>
<option value="ZW">Zimbabue</option>
</select>

</p>
        <input type="text" class="form-control mb-3" name="Mail" placeholder="Correo ">
        <input type="text" class="form-control mb-3" name="Password" placeholder="Contraseña">
        <p>INICIO LICENCIA</p>
        <input type="date" class="form-control mb-3" name="FechaInicio" placeholder="Fecha de inicio">
        <p>FIN LICENCIA</p>
        <input type="date" class="form-control mb-3" name="FechaFinal" placeholder="Fecha de fin">
        <p>
        <label for="user login">GENERO<br>
        <br>
        <select class="form-select" aria-label="Default select example" name="Gender">
        <option value="Masculino" >Masculino </option>
        <option value="Femenino">Femenino</option>
        </select>
        <br><br>
        
        <input type="submit" class="btn btn" style="background-color:rgb(205,220,57,255)">

        </form>
        </div>
        
        <div class= "col-md-10">
        <table class="table">
        <table class="table table-light">
            <thead class="thead-light">
            
            <tr>
                <th>Id</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Genero</th>
                <th>Pais</th>
                <th>Empresa</th>
                <th>Email</th>
                <th>Inicio licencia</th>
                <th>Fin licencia</th>
                <th>Aprobación</th>
                <th>Estado</th>
                
                <th></th>
                <th></th>
            </tr>
         </thead>
         <tbody>
            <?php 
            while ($row=mysqli_fetch_array($query)){
            ?>
            <img style="width:px"src="data:image/jpg;base64,<?php echo base64_encode($row['Logo'])?>">
            <tr>
            
 

                 <th><?php echo $row['Id'] ?></th>
                 <th><?php echo $row['Name'] ?></th>
                 <th><?php echo $row['Lastname'] ?></th>
                 <th><?php echo $row['Gender'] ?></th>
                 <th><?php echo $row['Country'] ?></th>
                 <th><?php echo $row['Company'] ?></th>
                 <th><?php echo $row['Mail'] ?></th>
                 <th><?php echo $row['FechaInicio'] ?></th>
                 <th><?php echo $row['FechaFinal'] ?></th>
                 <th><?php echo $row['Aprovado'] ?></th>
                 <th>
                    
                    <?php
             $datetime1 = date_create(date('Y-m-d'));    
             $datetime2 = date_create($row['FechaFinal']);   
             $dias= $diff = $datetime1->diff($datetime2); 
             $dias = $datetime1->diff($datetime2)->format('%r%a');
             if ($dias <= 0) {
               echo '<span class="badge badge-danger">Vencido</span>  ';
           } elseif ($dias <= 3) {
               echo '<span class="badge badge-warning">Está a ' . $dias . ' días de vencer</span>';
          
           } else {
               echo '<span class="badge badge-success">Activo</span>';
           }
       
       ?>
       
       </th>
       
                 <th></th>
                 <th><a href="Actudatad2.php?id=<?php echo $row['Id'] ?> " class="btn btn" style="background-color:rgb(205,220,57,255)">EDITAR</a></th>
                 <th><a href="Borrardat.php?id=<?php echo $row['Id'] ?> " class="btn btn" style="background-color:rgb(254,193,7,255)" onclick="return confirm('Estás seguro que deseas eliminar el registro?');">ELIMINAR</a></th>
                 <th><a href="Historialadm2.php?id=<?php echo $row['Id'] ?> " class="btn btn" style="background-color:rgb(80,137,242,255)">REGISTROS</a></th>
                 
                 </tr>
    
                 </tr>
                 </tr>
    
            <?php
            }
            ?>
         </tbody>
        </table>
   
    <div>
    
    </div>
    
     </div>
    </div>
    
    