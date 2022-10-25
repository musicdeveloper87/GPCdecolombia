<?php
include("templates/Cabecera.php");
include("ValidacionBd.php");

session_start();

if(isset($_POST['register'])){
    $Id=$_POST['Id'];
    $Idr=$_POST['Idr'];
    $Name=$_POST['Name'];
    $Lastname=$_POST['Lastname'];
    $Age=$_POST['Age'];
    $Country=$_POST['Country'];
    $Company=$_POST['Company'];
    $Mail=$_POST['Mail'];
    $Password=$_POST['Password'];
     $cPassword=$_POST['cPassword'];
    $Gender=$_POST['Gender'];
    $Id_rol=2;
    $Fechaactual=date('Y-m-d');
    
    $query=$conn->query("SELECT * from userstd where Mail='$Mail'");

    if ($query->num_rows>0){
     ?>
     <span>ese correo ya existe.</span>
    <?php

          }
     elseif (!preg_match("/^[0-9_]*$/",$Password) || ( strlen($Password )!= 4)){
     ?>
                <span style="font-size:11px;">contraseña invalida, solo usar 4 digitos en valores numericos.</span>
            <?php 
       
       }
 elseif (!preg_match("/^[0-9_]*$/",$Id)){
           ?>
                <span style="font-size:11px;">documento invalido, solo usar valores numericos.</span>
            <?php 
       }
    elseif($_POST["Password"]!=$_POST["cPassword"]){
          ?>
                 <span style="font-size:11px;">las contraseñas no coinciden.</span>
          <?php
   }
   elseif($_POST["Id"]!=$_POST["Idr"]){
         ?>
                 <span style="font-size:11px;">los documentos no coinciden.</span>
          <?php
    }
    else{
     $mpassword=md5($Password);
       $conn->query("INSERT into userstd (Id, Name,Lastname,Gender,Age,Country,Company,Mail,Password,Id_rol,FechaFinal) values ('$Id', '$Name','$Lastname','$Gender','$Age','$Country','$Company','$Mail','$mpassword','$Id_rol','$Fechaactual')");
            ?>                                                                                                                                                                                                             
                <span>REGISTRO CORRECTO.</span>
            <?php 
    }
}

    ?>






<div class="container mregister">

<div id="login">
    <H1>REGISTRAR</H1>
    <form name="registerform" id="registerform" action="Registro.php"method="POST">
<p>
     <label for="user login">NOMBRES<br>
     <input type="text" name="Name" id="Name" placeholder="ingresa tus nombres" class="input" size="32" value="" required/> </label>

</p>
<p>
     <label for="user login">APELLIDOS<br>
     <input type="text" name="Lastname" id="Lastname" placeholder="ingresa tus apellidos" class="input" size="32" value=""required/> </label>

</p>
<p>
     <label for="user login">DOCUMENTO<br>
     <input type="text" name="Id" id="Id" placeholder="ingresa tu documento de identidad" class="input" size="32" value=""required/> </label>

</p>
<p>
     <label for="user login">REPETIR DOCUMENTO<br>
     <input type="text" name="Idr" id="Idr" placeholder="ingresa tu documento de identidad" class="input" size="32" value=""required/> </label>

</p>
<p>
     <label for="user login" >GENERO<br>
     <input type="radio" name="Gender" id="Gender" class="input" size="32" value="Masculino" /> Masculino</label>
     <input type="radio" name="Gender" id="Gender" class="input" size="32" value="Femenino" required/> Femenino</label>


</p>
<p>
     <label for="user login">FECHA DE NACIMIENTO<br>
     <input type="date" name="Age" id="Age" class="input" size="32" value=""required/> </label>

</p>
<p>
     <label for="user login">PAIS<br>
    <select name="Country" >
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

<p>
     <label for="user login">EMPRESA<br>
     <input type="text" name="Company" id="Company"placeholder="ingresa empresa a la que perteneces" class="input" size="32" value=""required/> </label>

</p>
<p>
     <label for="user pass">E-MAIL<br>
     <input type="email" name="Mail" id="Mail" placeholder="ingresa tu correo electronico"class="input" size="32" value=""required/> </label>

</p>
<p>
     <label for="user pass">CONTRASEÑA<br>
     <input type="password" name="Password" id="Password" placeholder="ingresa 4 valores númericos" maxlength="4" class="input" size="32" value=""required/> </label>

</p>

<p>
     <label for="user pass">REPETIR CONTRASEÑA<br>
     <input type="password" name="cPassword" id="cPassword"  maxlength="4"  placeholder="ingresa 4 valores númericos" class="input" size="32" value=""required/> </label>

</p>
<div class="checkbox icheck">
<label>
              <input type="checkbox" name="check" required> Acepto los <a href="tratamientodedatos.php">términos y condiciones</a>
            </label>
  </div>
  <br>
<p class="submit">
     <input type="submit" name="register" id="register" class="btn btn" style="background-color:rgb(205,220,57,255)" value="CREAR USUARIO"/>
</p>
<p class= "regtext">Ya tienes cuenta? <a href= "LoginUser.php"> entra aqui!</a></p>
    </form>
</div>



</div>



