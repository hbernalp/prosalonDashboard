<?php

require "./controler/conexion.php";
session_start();

if($_POST){
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    
    $sql = "SELECT id, nombre_completo, usuario, contrasena, id_perfil FROM usuarios WHERE usuario='$usuario'";
    
    $resultado = $mysqli->query($sql);
    $num = $resultado->num_rows;
    
    //Validacion del Usuario
    if($num>0){ 

        //Trae los resultados de la consulta
        $row = $resultado->fetch_assoc();
        
        //Consultar el password de la BD, viene de la consulta
        $password_bd = $row['contrasena'];
        //Validacion del password que digita desde el formulario y Convertir el password a sha1 para hacer la comparación
        $pass_c = sha1($contrasena);

        if($password_bd == $pass_c){

            $_SESSION['id'] = $row['id'];
            $_SESSION['nombre'] = $row['nombre_completo'];
            $_SESSION['id_perfil'] = $row['id_perfil'];

                                     
            header("location: dashboard.php");
            
        }else{

            echo'
            <script>
                alert("La contraseña No es correcta");
                window.location = "index.php";
            </script>
            ';

        }
       

    }else{

        echo'
        <script>
            alert("El usuario NO esta registrado");
            window.location = "index.php";
        </script>
        ';

        }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistema para ver y administrar la proyección de los tableros en Bi, para la compañia Prosalon Sas">
    <meta name="author" content="Harrisson Bernal">
    <meta name="version" content="1.0.0">

    <title>Administrador - Prosalon Bi</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Gracias por regresar!</h1>
                                    </div>
                                    <form class="user" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                        <div class="form-group">
                                            <input name="usuario" type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input name="contrasena" type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Recordar Contraseña</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">Login</button> 
                                        <hr>
                                        <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a> -->
                                    </form>
                                    
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Olvidaste la Clave?</a>
                                    </div>
                                    <!-- <div class="text-center">
                                        <a class="small" href="register.html">Crear un nuevo Usuario!</a>
                                    </div> -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>