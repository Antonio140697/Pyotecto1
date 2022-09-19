<style>
  body{
    background-color: red !important;
  }
  </style>
<?php  
require 'bd.php';
 session_start();  
 if ($_POST){
  $usuario = $_POST['txtNomusuario'];
  $contra=$_POST['txtcontra'];
  $sql = "SELECT id,txtNomcliente,txtcontra,txtTipoUsuario FROM clientesreg  WHERE txtNomusuario='$usuario'";
  $mysqli = new mysqli('localhost', 'root', '', 'hoteldiegob_bd');
  $resultado = $mysqli->query($sql);
  $num = $resultado->num_rows;
  if($num>0){
    $row=$resultado->fetch_assoc();
    $contra_bd = $row['txtcontra'];
    $pass_c = ($contra);
    if($contra_bd == $pass_c){
      $_SESSION['id'] = $row['id'];
      $_SESSION['txtNomcliente'] = $row['txtNomcliente'];
      $_SESSION['	txtTipoUsuario'] = $row['	txtTipoUsuario'];
      header('Location: templates/index.php');
    }else{
      echo" las contraseña no coincide";
    }

  }else{
    echo"no existe el usuario";
  }
 }
 
 ?>
<title>Hotel Diego</title>
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/js/bootstrap.min.js">
  <link rel="stylesheet" href="assets/css/bootstrap-reboot.css.map">


  <section class="login container mt-5 ">
      <div class="container-xs m-5" >
    <div class="main row justify-content-md-center">
      <div class="col col-lg-2">
        <img src="assets/img/logo10.png" width="200" height="180" class="img-fluid my-5">
      </div>
      <div class="col col-md-auto">
        <form  method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <div class="mb-3 mt-3">
            <label for="text" class="form-label">USUARIO:</label>
            <input type="text" class="form-control" id="txtNomusuario" placeholder="Ingrese Usuario" name="txtNomusuario">
          </div>
          <div class="mb-3">
            <label for="pwd" class="form-label">CONTRESEÑA:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Ingrese contraseña" name="txtcontra">
          </div>
          <div class="mb-3">
          <a class="nav-link" href="registrarce.php">crea una cuenta</a>
             </div>
         
          <input type="submit" class="btn btn-primary"  name="acceder" value="ACCEDER" ></input>
        </form>
      </div>

        
    </div>
  </section>
 
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/032d11eac3.js" crossorigin="anonymous"></script>


  