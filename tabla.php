<?php
session_start();

require "./controler/conexion.php";

if(!isset ($_SESSION['id'])){
    echo'
    <script>
        alert("Por favor iniciar sesión");
        window.location = "index.php";
    </script>
    ';
    session_destroy();
    die();
}
$nombre = $_SESSION['nombre'];
$tipo_usuario = $_SESSION['id_perfil'];

if($tipo_usuario == 113 || $tipo_usuario == 115){
    echo'
    <script>
        alert("Esta ingresando a los reportes de Usuarios y perfiles");
    </script>
    ';

    
}else{
    //$where = "WHERE id=$id";
    echo'
        <script>
            alert("El usuario no tiene permisos para ingresar a reportes");
            window.location = "index.php";
        </script>
        ';
}

// $sql = "SELECT id, nombre_completo, usuario, contrasena, id_perfil FROM usuarios $where ";
$sql = "SELECT usuarios.id_perfil, usuarios.nombre_completo, usuarios.correo, usuarios.usuario, perfil.id, perfil.nombre_perfil FROM usuarios INNER JOIN perfil ON usuarios.id_perfil = perfil.id";
$resultado = $mysqli->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

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
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <!-- <link href="css/sb-admin-2.min.css" rel="stylesheet"> -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Tableros BI <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu de Reportes
            </div>

            <!-- Nav Item - Todos Collapse Menu -->
            <?php if($tipo_usuario == 115 || $tipo_usuario = 113) { ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse101"
                        aria-expanded="true" aria-controls="collapse101">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Reportes...</span>
                    </a>
                    <div id="collapse101" class="collapse" aria-labelledby="heading101" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Usuarios Actuales</h6>
                                <a class="collapse-item " href="tabla.php"><i class="fas fa-fw fa-table"></i><span>Usuarios y Perfiles</span></a>                  
                                <a class="collapse-item " href="accesos.php"><i class="fas fa-fw fa-table"></i><span>Cantidad de Ingresos</span></a>                  
                        </div>
                    </div>
                </li>

                 <!-- Divider -->
                 <hr class="sidebar-divider d-none d-md-block">

                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php" aria-expanded="true" aria-controls="collapse102"><span>Regresar al panel</span>
                         
                    </a>
                    
                </li>
            
                
            
                <!-- Nav Item - Charts -->
                
            
                            <!-- Divider -->
                            <hr class="sidebar-divider d-none d-md-block">
            
                            <!-- Sidebar Toggler (Sidebar) -->
                            <div class="text-center d-none d-md-inline">
                                <button class="rounded-circle border-0" id="sidebarToggle"></button>
                            </div>
            <?php } ?>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Administrator Rol Pages Collapse Menu -->
            

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small" > <?php echo ($nombre); ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Configuracion
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Log de Actividad
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Salir
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                       
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Usuarios Registrados y Perfiles</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nombre Completo</th>
                                            <th>usuario</th>
                                            <th>Perfil</th>
                                            <th>Nombre del Perfil</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nombre Completo</th>
                                            <th>usuario</th>
                                            <th>Perfil</th>
                                            <th>Nombre del Perfil</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <!-- Extrae los datos de la consulta -->
                                        <?php while($row = $resultado->fetch_assoc()) { ?>

                                            <tr>
                                                <td><?php echo $row['nombre_completo']; ?></td>
                                                <td><?php echo $row['usuario']; ?></td>
                                                <td><?php echo $row['id_perfil']; ?></td>
                                                <td><?php echo $row['nombre_perfil']; ?></td>
                                            </tr>
                                        <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>


                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Prosalon 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="index.php">Logout</a>
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

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>