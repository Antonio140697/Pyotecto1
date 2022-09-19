<?php
include('db.php')
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Diego</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/style1.css">
    <link rel="stylesheet" href="../assets/js/bootstrap.min.js">
    <link rel="stylesheet" href="../assets/css/bootstrap-reboot.css.map">

</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="../index.php"><i class="fa fa-home"></i> INICIO</a>
                    </li>

                </ul>

            </div>

        </nav>

        <div class="row">
            <div class="col-sm-6">

                <div id="page-wrapper">
                    <div id="page-inner">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="page-header">
                                    RESERVACION <small></small>
                                </h1>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        INFORMACION PERSONAL
                                    </div>
                                    </br>
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input name="nombre" class="form-control" required>

                                    </div>
                                    </br>
                                    <div class="form-group">
                                        <label>Apellido</label>
                                        <input name="apellido" class="form-control" required>

                                    </div>

                                    </br>
                                    <div class="form-group">
                                        <label>Telefono</label>
                                        <input name="telefono" class="form-control" required>

                                    </div>
                                    </br>
                                    <div class="form-group">
                                        <label>Correo</label>
                                        <input name="correo" type="email" class="form-control" required>

                                    </div>
                                    </div>
                                    </div>
                                    </div>

                                    </br>

                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <div class="panel panel-primary">
                                                    <div class="panel-heading">
                                                        INFORMACION DE LA RESERVACION
                                                    </div>
                                                    </br>
                                                    <div class="panel-body">
                                                        <div class="form-group">
                                                            <label>Tipo de habitacion</label>
                                                            <select name="tipohabi" class="form-control" required>
                                                                <option value selected></option>
                                                                <option value="Habitacion Individual">Habitacion
                                                                    Individual</option>
                                                                <option value="Habitacion Doble">Habitacion Doble
                                                                </option>
                                                                <option value="Habitacion Individual">Habitacion
                                                                    Individual</option>
                                                                <option value="Habitacion Doble">Habitacion Doble
                                                                </option>
                                                                <option value="Habitacion Doble">Habitacion Doble
                                                                </option>
                                                            </select>
                                                        </div>
                                                        </br>
                                                        <div class="form-group">
                                                            <label>Tipo De Cama</label>
                                                            <select name="tipocama" class="form-control" required>
                                                                <option value selected></option>
                                                                <option value="Individual">individual*1*2</option>
                                                                <option value="Doble">Doble*2*3*4</option>
                                                                <!--
                                                    <option value="Triple">Triple</option>
                                                <option value="Quad">Quad</option>
                                                -->
                                                                <option value="None">None</option>

                                                            </select>
                                                        </div>
                                                        </br>
                                                        <div class="form-group">
                                                            <label>Numero De Habitacion</label>
                                                            <select name="numhabit" class="form-control" required>
                                                                <option value selected></option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <!--
												<option value="6">6</option>
												<option value="7">7</option>
                                                -->
                                                            </select>
                                                        </div>


                                                        </br>
                                                        <div class="form-group">
                                                            <label>Registrar-Entrada</label>
                                                            <input name="fechaent" type="date" class="form-control">

                                                        </div>
                                                        </br>
                                                        <div class="form-group">
                                                            <label>Registrar-Salida</label>
                                                            <input name="fechasal" type="date" class="form-control">

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                    

                                    <div class="col-md-12 col-sm-12">
                                        <div class="well">
                                            <h4>CONFIRMACION DE VERIFICACION</h4>
                                            <p>Escriba Abajo Este Codigo:
                                                <?php $Random_code=rand(); echo$Random_code; ?> </p><br />
                                            <p>Registra El Codigo<br /></p>
                                            <input type="text" name="code1" title="random code" />
                                            <input type="hidden" name="code" value="<?php echo $Random_code; ?>" />
                                            <input type="submit" name="submit" class="btn btn-success">
                                            <?php
							if(isset($_POST['submit']))
							{
							$code1=$_POST['code1'];
							$code=$_POST['code']; 
							if($code1!="$code")
							{
							$msg="Invalide code"; 
							}
							else
							{
							
									$con=mysqli_connect("localhost","root","","hotelhd");
									$check="SELECT * FROM roombook WHERE correo = '$_POST[correo]'";
									$rs = mysqli_query($con,$check);
									$data = mysqli_fetch_array($rs, MYSQLI_NUM);
									if($data[0] > 1) {
										echo "<script type='text/javascript'> alert('User Already in Exists')</script>";
										
									}

									else
									{
										$new ="Not Conform";
										$newUser="INSERT INTO 'roombook'('nombre', 'apellido', 'correo','telefono', 'tipohabi', 'tipocama', 'numhabit','fechaent', 'fechasal','estado','nodays') VALUES ('$_POST[nombre]','$_POST[apellido]','$_POST[correo]','$_POST[telefono]','$_POST[tipohabi]','$_POST[tipocama]','$_POST[numhabit]','$_POST[fechaent]','$_POST[fechasal]','$new',datediff('$_POST[fechasal]','$_POST[fechaent]'))";
										if (mysqli_query($con,$newUser))
										{
											echo "<script type='text/javascript'> alert('Your Booking application has been sent')</script>";
											
										}
										else
										{
											echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
											
										}
									}

							$msg="Your code is correct";
							}
							}
							?>
                                            </form>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- /. PAGE INNER  -->
                    </div>
                    <!-- /. PAGE WRAPPER  -->
                </div>
                <!-- /. WRAPPER  -->
                <!-- JS Scripts-->
                <!-- jQuery Js -->
                <script src="../assets/js/jquery-1.10.2.js"></script>
                <!-- Bootstrap Js -->
                <script src="../assets/js/bootstrap.min.js"></script>
                <!-- Metis Menu Js -->
                <script src="../assets/js/jquery.metisMenu.js"></script>
                <!-- Custom Js -->
                <script src="../assets/js/custom-scripts.js"></script>


</body>

</html>