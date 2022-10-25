
     <?php
include("templates/Cabecera.php");
include("ValidacionBd.php");
session_start();
if(isset($_SESSION['Company'])){
    header("location:Admin2.php");
  }

   if(isset($_POST['entrar'])){
       
       $Id=$_POST['Id'];
       $Password=md5($_POST['Password']);
       $_SESSION['Id']=$Id;
       $query=$conn->query("SELECT * from userstd where Id='$Id' and Password='$Password'");
       $row=$query->fetch_array();
       if ($row['Id_rol']==1){
        header("Location:Admin.php");
   }
   
elseif ($row['Id_rol']==2){
       header("Location:Usuario.php");
   }
   elseif ($row['Id_rol']==3){
    $_SESSION['Company']=$row ['Company'];
    header("Location:Admin2.php");
}
   else{
    ?>
    <?php
    header ("Location:LoginUser.php");
    ?>
           ?>
               <span>Login falló. Usuario no encontrado.</span>
           <?php 
       }
    }
    ?>
  

<div class="container mlogin">
    
        <div id="entrar">
    <h1 >AUTENTICACION DE USUARIO</h1>
        <form name="loginform" id="loginform" action="" method="POST">
        <p>
        <label for="User_login">ID <br>
        <input type= "text" name="Id" id="Id" class="input" placeholder="ingresa tu documento de identidad" value="" size="32" required/></label>
        </p>
        <p>
        <label for="User_pass">CONTRASEÑA <br>
        <input type= "Password" name="Password" id="Password" class="input" placeholder="ingresa tu contraseña de 4 digitos "maxlength="4" value="" size="32" required/></label>

         </p>
        <p class="submit">
            <input  type="submit" name="entrar" class="btn btn" style="background-color:rgb(205,220,57,255)" value="Entrar"/>
        </p>
        <p class="regtext" > no estas registrado? <a href="Registro.php">registrate aqui</a> !</p>
        
        </form>
        </div>
        </div>
    
</body>

</html> 