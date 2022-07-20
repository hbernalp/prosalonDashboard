<?php
require "./controler/conexion.php";

    session_start();

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

    //Creando los permisos de usuario por perfil
    $tipo_usuario = $_SESSION['id_perfil'];
   
    $formated_DATE = date('Y-m-d');
    $consulta = "INSERT INTO acces (nombre_usuario, rol_usuario, fecha) VALUES ('0', '$nombre', '$tipo_usuario', '$formated_DATE')";
    
 
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
                Menu de Navegación
            </div>

            <!-- Nav Item - Operaciones Pages Collapse Menu -->
            <?php if($tipo_usuario == 101) { ?>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse101"
                        aria-expanded="true" aria-controls="collapse101">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Operaciones</span>
                    </a>
                    <div id="collapse101" class="collapse" aria-labelledby="heading101" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Operaciones BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYjRiMjZiMjMtZjJlNi00M2VjLTlmMzEtMWU2OGZmZWI4MzI3IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectionf9da565129d2b54b9c1a">Flash de Ventas</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYTA2ZjY2ZWYtZWJjZS00NDc4LTk1MzgtNzhjNGU2NGU2MGRlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Así Vamos</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNmExYmVmYjYtM2VkYS00YTNmLWFkMmQtZDkwNjg1MDY5NjMwIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Así Vamos Clientes</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYjczNTk1MDctOGY5MC00MTQxLWJjMmQtNDY5NmZhYjc0NjdlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Experiencias Prosalon</a>
                        </div>
                    </div>
                </li>
            <?php } ?>

            <!-- Nav Item - Operaciones y Marcas Propias Collapse Menu -->
            <?php if($tipo_usuario == 102) { ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse101"
                        aria-expanded="true" aria-controls="collapse101">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Operaciones</span>
                    </a>
                    <div id="collapse101" class="collapse" aria-labelledby="heading101" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Operaciones BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYjRiMjZiMjMtZjJlNi00M2VjLTlmMzEtMWU2OGZmZWI4MzI3IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectionf9da565129d2b54b9c1a">Flash de Ventas</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYTA2ZjY2ZWYtZWJjZS00NDc4LTk1MzgtNzhjNGU2NGU2MGRlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Así Vamos</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNmExYmVmYjYtM2VkYS00YTNmLWFkMmQtZDkwNjg1MDY5NjMwIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Así Vamos Clientes</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYjczNTk1MDctOGY5MC00MTQxLWJjMmQtNDY5NmZhYjc0NjdlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Experiencias Prosalon</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse102"
                        aria-expanded="true" aria-controls="collapse102">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Marcas Propias</span>
                    </a>
                    <div id="collapse102" class="collapse" aria-labelledby="heading102" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Marcas Propias BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiMzc5ZGI2MjItMDBlYS00ZTBlLWJmYjktMWI2ZjM0YjU0MGM0IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Marcas Propias</a>
                        </div>
                    </div>
                </li>
            <?php } ?>

            <!-- Nav Item - Operaciones, Supply, Crm, Ecommerce, Mercadeo Collapse Menu -->
            <?php if($tipo_usuario == 103) { ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse101"
                        aria-expanded="true" aria-controls="collapse101">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Operaciones</span>
                    </a>
                    <div id="collapse101" class="collapse" aria-labelledby="heading101" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Operaciones BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYjRiMjZiMjMtZjJlNi00M2VjLTlmMzEtMWU2OGZmZWI4MzI3IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectionf9da565129d2b54b9c1a">Flash de Ventas</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYTA2ZjY2ZWYtZWJjZS00NDc4LTk1MzgtNzhjNGU2NGU2MGRlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Así Vamos</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNmExYmVmYjYtM2VkYS00YTNmLWFkMmQtZDkwNjg1MDY5NjMwIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Así Vamos Clientes</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYjczNTk1MDctOGY5MC00MTQxLWJjMmQtNDY5NmZhYjc0NjdlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Experiencias Prosalon</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse103"
                        aria-expanded="true" aria-controls="collapse103">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Supply</span>
                    </a>
                    <div id="collapse103" class="collapse" aria-labelledby="heading103" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Supply BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNGQ3ZTcwMTMtZWY2Mi00YTc4LTgzYzYtMTdkZTE4NDJhYzc2IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Supply</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiMmU3OWE0YWMtOGVjMy00NDU1LTliZmMtZWRlYzNjYzI2OTg0IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Edad del Inventario</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse104"
                        aria-expanded="true" aria-controls="collapse104">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Crm</span>
                    </a>
                    <div id="collapse104" class="collapse" aria-labelledby="heading104" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Crm BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiZmY4MGVjNzAtMTA5Zi00MmZiLTliNWItYzNjZmRiZmNjNGU2IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectionc213d6a2706d729f2515">Crm</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNDgwMTk3ZWUtNjQ0Ni00YjRmLTg3ZDQtMzZmYmRmOGY1MjEzIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Crm - Rfm</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiY2MxYmMxYzQtOWEzZS00MmExLWIxYzMtYmVkYzg2YzI3ZTk0IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Compras por Clientes</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse105"
                        aria-expanded="true" aria-controls="collapse105">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Ecommerce</span>
                    </a>
                    <div id="collapse105" class="collapse" aria-labelledby="heading105" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Ecommerce BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNmNiNjk1M2ItNGNjOC00YWY2LWFkNWMtNzVmZDY1NmJkMDIzIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Analitycs</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiZWI1NTM1OTUtMWVmZS00OTA4LWFkNDctYWUzYTJlNzlmYjdlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSection960e31632a9315c720b3">App y Mkp</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNDNjOGZjZTQtOWRjNy00ZjcwLTllMjYtNTM3OGMyZWU4YTMwIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Digital</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse106"
                        aria-expanded="true" aria-controls="collapse106">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Mercadeo</span>
                    </a>
                    <div id="collapse106" class="collapse" aria-labelledby="heading106" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Mercadeo BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNzI0ZTNhY2QtMzk1Yi00ZWUwLWIxZGUtNTI4Y2Y1MWI5M2E0IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">IRS Cromantic</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYzNjMzAwMzMtODA5Zi00MzFjLTgxMWUtYWJiZmUwY2YyZjU2IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectionbbf50c3a839bc9c289e3">IRS Blind</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYmVjYjRkMjYtNmU1Yy00ZDU5LWI2ODEtNDQ0YWUzM2QyMTQ5IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSection">Influenciadoras</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNjQyZDc3MmUtY2ZhOC00MDNkLWJhOTgtZTE2MmZhZTY5YTRhIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Pauta Blind</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYjczNTk1MDctOGY5MC00MTQxLWJjMmQtNDY5NmZhYjc0NjdlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Experiencias Prosalon</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiZDA1NDVhMWYtYjY1MC00MzhlLWJjMTUtYTQ3NmQwOWJjNjBiIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectiona31364f5f8d9da86218b">Punto de Gondola</a>
                        </div>
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Pauta Cromantic</h6>
                            <a class="collapse-item" target="proyector" href="https://platform.datorama.com/external/dashboard?embedpage=253270ed-0a1f-4760-a683-c24a33025846">Pauta Datorama Social</a>
                            <a class="collapse-item" target="proyector" href="https://platform.datorama.com/external/dashboard?embedpage=00330952-f19b-41cf-a8ca-1bb82f405acf">Pauta Datorama Semanal</a>
                            <a class="collapse-item" target="proyector" href="https://platform.datorama.com/external/dashboard?embedpage=454b91ff-d623-4ae2-9a3e-ace08dcdb847">Pauta Datorama Mensual</a>
                        </div>

                    </div>
                </li>
            <?php } ?>

             <!-- Nav Item - Operaciones, Supply, Crm Collapse Menu -->
            <?php if($tipo_usuario == 104) { ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse101"
                        aria-expanded="true" aria-controls="collapse101">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Operaciones</span>
                    </a>
                    <div id="collapse101" class="collapse" aria-labelledby="heading101" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Operaciones BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYjRiMjZiMjMtZjJlNi00M2VjLTlmMzEtMWU2OGZmZWI4MzI3IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectionf9da565129d2b54b9c1a">Flash de Ventas</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYTA2ZjY2ZWYtZWJjZS00NDc4LTk1MzgtNzhjNGU2NGU2MGRlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Así Vamos</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNmExYmVmYjYtM2VkYS00YTNmLWFkMmQtZDkwNjg1MDY5NjMwIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Así Vamos Clientes</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYjczNTk1MDctOGY5MC00MTQxLWJjMmQtNDY5NmZhYjc0NjdlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Experiencias Prosalon</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse103"
                        aria-expanded="true" aria-controls="collapse103">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Supply</span>
                    </a>
                    <div id="collapse103" class="collapse" aria-labelledby="heading103" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Supply BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNGQ3ZTcwMTMtZWY2Mi00YTc4LTgzYzYtMTdkZTE4NDJhYzc2IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Supply</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiMmU3OWE0YWMtOGVjMy00NDU1LTliZmMtZWRlYzNjYzI2OTg0IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Edad del Inventario</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse104"
                        aria-expanded="true" aria-controls="collapse104">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Crm</span>
                    </a>
                    <div id="collapse104" class="collapse" aria-labelledby="heading104" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Crm BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiZmY4MGVjNzAtMTA5Zi00MmZiLTliNWItYzNjZmRiZmNjNGU2IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectionc213d6a2706d729f2515">Crm</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNDgwMTk3ZWUtNjQ0Ni00YjRmLTg3ZDQtMzZmYmRmOGY1MjEzIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Crm - Rfm</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiY2MxYmMxYzQtOWEzZS00MmExLWIxYzMtYmVkYzg2YzI3ZTk0IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Compras por Clientes</a>
                        </div>
                    </div>
                </li>

            <?php } ?>

            <!-- Nav Item - Operaciones, Supply, Crm, Marcas Propias, Ecommerce, Mercadeo, Audiencia Collapse Menu -->
            <?php if($tipo_usuario == 105) { ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse101"
                        aria-expanded="true" aria-controls="collapse101">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Operaciones</span>
                    </a>
                    <div id="collapse101" class="collapse" aria-labelledby="heading101" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Operaciones BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYjRiMjZiMjMtZjJlNi00M2VjLTlmMzEtMWU2OGZmZWI4MzI3IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectionf9da565129d2b54b9c1a">Flash de Ventas</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYTA2ZjY2ZWYtZWJjZS00NDc4LTk1MzgtNzhjNGU2NGU2MGRlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Así Vamos</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNmExYmVmYjYtM2VkYS00YTNmLWFkMmQtZDkwNjg1MDY5NjMwIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Así Vamos Clientes</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYjczNTk1MDctOGY5MC00MTQxLWJjMmQtNDY5NmZhYjc0NjdlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Experiencias Prosalon</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse102"
                        aria-expanded="true" aria-controls="collapse102">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Marcas Propias</span>
                    </a>
                    <div id="collapse102" class="collapse" aria-labelledby="heading102" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Marcas Propias BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiMzc5ZGI2MjItMDBlYS00ZTBlLWJmYjktMWI2ZjM0YjU0MGM0IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Marcas Propias</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse103"
                        aria-expanded="true" aria-controls="collapse103">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Supply</span>
                    </a>
                    <div id="collapse103" class="collapse" aria-labelledby="heading103" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Supply BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNGQ3ZTcwMTMtZWY2Mi00YTc4LTgzYzYtMTdkZTE4NDJhYzc2IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Supply</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiMmU3OWE0YWMtOGVjMy00NDU1LTliZmMtZWRlYzNjYzI2OTg0IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Edad del Inventario</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse104"
                        aria-expanded="true" aria-controls="collapse104">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Crm</span>
                    </a>
                    <div id="collapse104" class="collapse" aria-labelledby="heading104" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Crm BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiZmY4MGVjNzAtMTA5Zi00MmZiLTliNWItYzNjZmRiZmNjNGU2IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectionc213d6a2706d729f2515">Crm</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNDgwMTk3ZWUtNjQ0Ni00YjRmLTg3ZDQtMzZmYmRmOGY1MjEzIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Crm - Rfm</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiY2MxYmMxYzQtOWEzZS00MmExLWIxYzMtYmVkYzg2YzI3ZTk0IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Compras por Clientes</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse105"
                        aria-expanded="true" aria-controls="collapse105">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Ecommerce</span>
                    </a>
                    <div id="collapse105" class="collapse" aria-labelledby="heading105" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Ecommerce BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNmNiNjk1M2ItNGNjOC00YWY2LWFkNWMtNzVmZDY1NmJkMDIzIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Analitycs</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiZWI1NTM1OTUtMWVmZS00OTA4LWFkNDctYWUzYTJlNzlmYjdlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSection960e31632a9315c720b3">App y Mkp</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNDNjOGZjZTQtOWRjNy00ZjcwLTllMjYtNTM3OGMyZWU4YTMwIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Digital</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse106"
                        aria-expanded="true" aria-controls="collapse106">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Mercadeo</span>
                    </a>
                    <div id="collapse106" class="collapse" aria-labelledby="heading106" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Mercadeo BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNzI0ZTNhY2QtMzk1Yi00ZWUwLWIxZGUtNTI4Y2Y1MWI5M2E0IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">IRS Cromantic</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYzNjMzAwMzMtODA5Zi00MzFjLTgxMWUtYWJiZmUwY2YyZjU2IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectionbbf50c3a839bc9c289e3">IRS Blind</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYmVjYjRkMjYtNmU1Yy00ZDU5LWI2ODEtNDQ0YWUzM2QyMTQ5IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSection">Influenciadoras</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNjQyZDc3MmUtY2ZhOC00MDNkLWJhOTgtZTE2MmZhZTY5YTRhIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Pauta Blind</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYjczNTk1MDctOGY5MC00MTQxLWJjMmQtNDY5NmZhYjc0NjdlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Experiencias Prosalon</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiZDA1NDVhMWYtYjY1MC00MzhlLWJjMTUtYTQ3NmQwOWJjNjBiIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectiona31364f5f8d9da86218b">Punto de Gondola</a>
                        </div>
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Pauta Cromantic</h6>
                            <a class="collapse-item" target="proyector" href="https://platform.datorama.com/external/dashboard?embedpage=253270ed-0a1f-4760-a683-c24a33025846">Pauta Datorama Social</a>
                            <a class="collapse-item" target="proyector" href="https://platform.datorama.com/external/dashboard?embedpage=00330952-f19b-41cf-a8ca-1bb82f405acf">Pauta Datorama Semanal</a>
                            <a class="collapse-item" target="proyector" href="https://platform.datorama.com/external/dashboard?embedpage=454b91ff-d623-4ae2-9a3e-ace08dcdb847">Pauta Datorama Mensual</a>
                        </div>

                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse107"
                        aria-expanded="true" aria-controls="collapse107">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Audiencias</span>
                    </a>
                    <div id="collapse107" class="collapse" aria-labelledby="heading107" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Audiencias BI:</h6>
                            <a class="collapse-item" target="proyector" href="#">Audiencia 1</a>
                        </div>
                    </div>
                </li>
            <?php } ?>


            <!-- Nav Item - Operaciones, Supply  Audiencia Collapse Menu -->
            <?php if($tipo_usuario == 106) { ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse101"
                        aria-expanded="true" aria-controls="collapse101">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Operaciones</span>
                    </a>
                    <div id="collapse101" class="collapse" aria-labelledby="heading101" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Operaciones BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYjRiMjZiMjMtZjJlNi00M2VjLTlmMzEtMWU2OGZmZWI4MzI3IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectionf9da565129d2b54b9c1a">Flash de Ventas</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYTA2ZjY2ZWYtZWJjZS00NDc4LTk1MzgtNzhjNGU2NGU2MGRlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Así Vamos</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNmExYmVmYjYtM2VkYS00YTNmLWFkMmQtZDkwNjg1MDY5NjMwIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Así Vamos Clientes</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYjczNTk1MDctOGY5MC00MTQxLWJjMmQtNDY5NmZhYjc0NjdlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Experiencias Prosalon</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse103"
                        aria-expanded="true" aria-controls="collapse103">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Supply</span>
                    </a>
                    <div id="collapse103" class="collapse" aria-labelledby="heading103" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Supply BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNGQ3ZTcwMTMtZWY2Mi00YTc4LTgzYzYtMTdkZTE4NDJhYzc2IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Supply</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiMmU3OWE0YWMtOGVjMy00NDU1LTliZmMtZWRlYzNjYzI2OTg0IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Edad del Inventario</a>
                        </div>
                    </div>
                </li>
            <?php } ?>

            <!-- Nav Item - Operaciones, Crm, Mercadeo Audiencia Collapse Menu -->
            <?php if($tipo_usuario == 107) { ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse101"
                        aria-expanded="true" aria-controls="collapse101">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Operaciones</span>
                    </a>
                    <div id="collapse101" class="collapse" aria-labelledby="heading101" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Operaciones BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYjRiMjZiMjMtZjJlNi00M2VjLTlmMzEtMWU2OGZmZWI4MzI3IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectionf9da565129d2b54b9c1a">Flash de Ventas</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYTA2ZjY2ZWYtZWJjZS00NDc4LTk1MzgtNzhjNGU2NGU2MGRlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Así Vamos</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNmExYmVmYjYtM2VkYS00YTNmLWFkMmQtZDkwNjg1MDY5NjMwIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Así Vamos Clientes</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYjczNTk1MDctOGY5MC00MTQxLWJjMmQtNDY5NmZhYjc0NjdlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Experiencias Prosalon</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse104"
                        aria-expanded="true" aria-controls="collapse104">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Crm</span>
                    </a>
                    <div id="collapse104" class="collapse" aria-labelledby="heading104" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Crm BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiZmY4MGVjNzAtMTA5Zi00MmZiLTliNWItYzNjZmRiZmNjNGU2IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectionc213d6a2706d729f2515">Crm</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNDgwMTk3ZWUtNjQ0Ni00YjRmLTg3ZDQtMzZmYmRmOGY1MjEzIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Crm - Rfm</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiY2MxYmMxYzQtOWEzZS00MmExLWIxYzMtYmVkYzg2YzI3ZTk0IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Compras por Clientes</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse106"
                        aria-expanded="true" aria-controls="collapse106">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Mercadeo</span>
                    </a>
                    <div id="collapse106" class="collapse" aria-labelledby="heading106" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Mercadeo BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNzI0ZTNhY2QtMzk1Yi00ZWUwLWIxZGUtNTI4Y2Y1MWI5M2E0IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">IRS Cromantic</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYzNjMzAwMzMtODA5Zi00MzFjLTgxMWUtYWJiZmUwY2YyZjU2IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectionbbf50c3a839bc9c289e3">IRS Blind</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYmVjYjRkMjYtNmU1Yy00ZDU5LWI2ODEtNDQ0YWUzM2QyMTQ5IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSection">Influenciadoras</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNjQyZDc3MmUtY2ZhOC00MDNkLWJhOTgtZTE2MmZhZTY5YTRhIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Pauta Blind</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYjczNTk1MDctOGY5MC00MTQxLWJjMmQtNDY5NmZhYjc0NjdlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Experiencias Prosalon</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiZDA1NDVhMWYtYjY1MC00MzhlLWJjMTUtYTQ3NmQwOWJjNjBiIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectiona31364f5f8d9da86218b">Punto de Gondola</a>
                        </div>
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Pauta Cromantic</h6>
                            <a class="collapse-item" target="proyector" href="https://platform.datorama.com/external/dashboard?embedpage=253270ed-0a1f-4760-a683-c24a33025846">Pauta Datorama Social</a>
                            <a class="collapse-item" target="proyector" href="https://platform.datorama.com/external/dashboard?embedpage=00330952-f19b-41cf-a8ca-1bb82f405acf">Pauta Datorama Semanal</a>
                            <a class="collapse-item" target="proyector" href="https://platform.datorama.com/external/dashboard?embedpage=454b91ff-d623-4ae2-9a3e-ace08dcdb847">Pauta Datorama Mensual</a>
                        </div>

                    </div>
                </li>

            <?php } ?>

            <!-- Nav Item - Operaciones, Crm, Mercadeo, Audiencias Collapse Menu -->
            <?php if($tipo_usuario == 108) { ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse101"
                        aria-expanded="true" aria-controls="collapse101">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Operaciones</span>
                    </a>
                    <div id="collapse101" class="collapse" aria-labelledby="heading101" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Operaciones BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYjRiMjZiMjMtZjJlNi00M2VjLTlmMzEtMWU2OGZmZWI4MzI3IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectionf9da565129d2b54b9c1a">Flash de Ventas</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYTA2ZjY2ZWYtZWJjZS00NDc4LTk1MzgtNzhjNGU2NGU2MGRlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Así Vamos</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNmExYmVmYjYtM2VkYS00YTNmLWFkMmQtZDkwNjg1MDY5NjMwIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Así Vamos Clientes</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYjczNTk1MDctOGY5MC00MTQxLWJjMmQtNDY5NmZhYjc0NjdlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Experiencias Prosalon</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse104"
                        aria-expanded="true" aria-controls="collapse104">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Crm</span>
                    </a>
                    <div id="collapse104" class="collapse" aria-labelledby="heading104" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Crm BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiZmY4MGVjNzAtMTA5Zi00MmZiLTliNWItYzNjZmRiZmNjNGU2IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectionc213d6a2706d729f2515">Crm</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNDgwMTk3ZWUtNjQ0Ni00YjRmLTg3ZDQtMzZmYmRmOGY1MjEzIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Crm - Rfm</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiY2MxYmMxYzQtOWEzZS00MmExLWIxYzMtYmVkYzg2YzI3ZTk0IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Compras por Clientes</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse106"
                        aria-expanded="true" aria-controls="collapse106">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Mercadeo</span>
                    </a>
                    <div id="collapse106" class="collapse" aria-labelledby="heading106" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Mercadeo BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNzI0ZTNhY2QtMzk1Yi00ZWUwLWIxZGUtNTI4Y2Y1MWI5M2E0IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">IRS Cromantic</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYzNjMzAwMzMtODA5Zi00MzFjLTgxMWUtYWJiZmUwY2YyZjU2IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectionbbf50c3a839bc9c289e3">IRS Blind</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYmVjYjRkMjYtNmU1Yy00ZDU5LWI2ODEtNDQ0YWUzM2QyMTQ5IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSection">Influenciadoras</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNjQyZDc3MmUtY2ZhOC00MDNkLWJhOTgtZTE2MmZhZTY5YTRhIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Pauta Blind</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYjczNTk1MDctOGY5MC00MTQxLWJjMmQtNDY5NmZhYjc0NjdlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Experiencias Prosalon</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiZDA1NDVhMWYtYjY1MC00MzhlLWJjMTUtYTQ3NmQwOWJjNjBiIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectiona31364f5f8d9da86218b">Punto de Gondola</a>
                        </div>
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Pauta Cromantic</h6>
                            <a class="collapse-item" target="proyector" href="https://platform.datorama.com/external/dashboard?embedpage=253270ed-0a1f-4760-a683-c24a33025846">Pauta Datorama Social</a>
                            <a class="collapse-item" target="proyector" href="https://platform.datorama.com/external/dashboard?embedpage=00330952-f19b-41cf-a8ca-1bb82f405acf">Pauta Datorama Semanal</a>
                            <a class="collapse-item" target="proyector" href="https://platform.datorama.com/external/dashboard?embedpage=454b91ff-d623-4ae2-9a3e-ace08dcdb847">Pauta Datorama Mensual</a>
                        </div>

                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse107"
                        aria-expanded="true" aria-controls="collapse107">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Audiencias</span>
                    </a>
                    <div id="collapse107" class="collapse" aria-labelledby="heading107" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Audiencias BI:</h6>
                            <a class="collapse-item" target="proyector" href="#">Audiencia 1</a>
                        </div>
                    </div>
                </li>
            <?php } ?>

            <!-- Nav Item - Operaciones, Crm Collapse Menu -->
            <?php if($tipo_usuario == 109) { ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse101"
                        aria-expanded="true" aria-controls="collapse101">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Operaciones</span>
                    </a>
                    <div id="collapse101" class="collapse" aria-labelledby="heading101" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Operaciones BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYjRiMjZiMjMtZjJlNi00M2VjLTlmMzEtMWU2OGZmZWI4MzI3IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectionf9da565129d2b54b9c1a">Flash de Ventas</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYTA2ZjY2ZWYtZWJjZS00NDc4LTk1MzgtNzhjNGU2NGU2MGRlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Así Vamos</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNmExYmVmYjYtM2VkYS00YTNmLWFkMmQtZDkwNjg1MDY5NjMwIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Así Vamos Clientes</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYjczNTk1MDctOGY5MC00MTQxLWJjMmQtNDY5NmZhYjc0NjdlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Experiencias Prosalon</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse104"
                        aria-expanded="true" aria-controls="collapse104">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Crm</span>
                    </a>
                    <div id="collapse104" class="collapse" aria-labelledby="heading104" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Crm BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiZmY4MGVjNzAtMTA5Zi00MmZiLTliNWItYzNjZmRiZmNjNGU2IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectionc213d6a2706d729f2515">Crm</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNDgwMTk3ZWUtNjQ0Ni00YjRmLTg3ZDQtMzZmYmRmOGY1MjEzIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Crm - Rfm</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiY2MxYmMxYzQtOWEzZS00MmExLWIxYzMtYmVkYzg2YzI3ZTk0IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Compras por Clientes</a>
                        </div>
                    </div>
                </li>
            <?php } ?>

            <!-- Nav Item - Operaciones, Supply, Financiero Collapse Menu -->
            <?php if($tipo_usuario == 110) { ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse101"
                        aria-expanded="true" aria-controls="collapse101">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Operaciones</span>
                    </a>
                    <div id="collapse101" class="collapse" aria-labelledby="heading101" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Operaciones BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYjRiMjZiMjMtZjJlNi00M2VjLTlmMzEtMWU2OGZmZWI4MzI3IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectionf9da565129d2b54b9c1a">Flash de Ventas</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYTA2ZjY2ZWYtZWJjZS00NDc4LTk1MzgtNzhjNGU2NGU2MGRlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Así Vamos</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNmExYmVmYjYtM2VkYS00YTNmLWFkMmQtZDkwNjg1MDY5NjMwIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Así Vamos Clientes</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYjczNTk1MDctOGY5MC00MTQxLWJjMmQtNDY5NmZhYjc0NjdlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Experiencias Prosalon</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse103"
                        aria-expanded="true" aria-controls="collapse103">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Supply</span>
                    </a>
                    <div id="collapse103" class="collapse" aria-labelledby="heading103" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Supply BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNGQ3ZTcwMTMtZWY2Mi00YTc4LTgzYzYtMTdkZTE4NDJhYzc2IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Supply</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiMmU3OWE0YWMtOGVjMy00NDU1LTliZmMtZWRlYzNjYzI2OTg0IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Edad del Inventario</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse108"
                        aria-expanded="true" aria-controls="collapse108">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Financiero</span>
                    </a>
                    <div id="collapse108" class="collapse" aria-labelledby="heading108" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Financiero BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiMWJiOWJjMmYtNjEyZS00MDA2LTk4ZTYtYzIwNmNlMmFjN2YwIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">P&G Comercial</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiY2Y0YzM0NzEtNDA4MS00NmFhLWEzMDYtYWRiYWNhYzU0N2Y5IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSection394b7cfe3b4aa403e20b">P&G Financiero</a>
                        </div>
                    </div>
                </li>
            <?php } ?>

            <!-- Nav Item - Supply, Sac Collapse Menu -->
            <?php if($tipo_usuario == 111) { ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse103"
                        aria-expanded="true" aria-controls="collapse103">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Supply</span>
                    </a>
                    <div id="collapse103" class="collapse" aria-labelledby="heading103" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Supply BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNGQ3ZTcwMTMtZWY2Mi00YTc4LTgzYzYtMTdkZTE4NDJhYzc2IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Supply</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiMmU3OWE0YWMtOGVjMy00NDU1LTliZmMtZWRlYzNjYzI2OTg0IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Edad del Inventario</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse111"
                        aria-expanded="true" aria-controls="collapse111">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>SAC</span>
                    </a>
                    <div id="collapse111" class="collapse" aria-labelledby="heading111" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">SAC BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiOTQ5ODE5MTUtNzljOC00YmI5LThiN2YtMTc3ODA0MGNlOWFiIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Blind</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiZTdmMjYyZjAtMDY2Ni00MjhhLTg5NzgtOTI2OGJiMDY3NjZkIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Cromantic</a>
                        </div>
                    </div>
                </li>
            <?php } ?>

            <!-- Nav Item - Operaciones, Supply, Crm, Marcas Propias, Mercadeo, Hr, Audiencias Collapse Menu -->
            <?php if($tipo_usuario == 112) { ?>
                
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse101"
                        aria-expanded="true" aria-controls="collapse101">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Operaciones</span>
                    </a>
                    <div id="collapse101" class="collapse" aria-labelledby="heading101" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Operaciones BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYjRiMjZiMjMtZjJlNi00M2VjLTlmMzEtMWU2OGZmZWI4MzI3IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectionf9da565129d2b54b9c1a">Flash de Ventas</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYTA2ZjY2ZWYtZWJjZS00NDc4LTk1MzgtNzhjNGU2NGU2MGRlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Así Vamos</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNmExYmVmYjYtM2VkYS00YTNmLWFkMmQtZDkwNjg1MDY5NjMwIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Así Vamos Clientes</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYjczNTk1MDctOGY5MC00MTQxLWJjMmQtNDY5NmZhYjc0NjdlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Experiencias Prosalon</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse102"
                        aria-expanded="true" aria-controls="collapse102">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Marcas Propias</span>
                    </a>
                    <div id="collapse102" class="collapse" aria-labelledby="heading102" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Marcas Propias BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiMzc5ZGI2MjItMDBlYS00ZTBlLWJmYjktMWI2ZjM0YjU0MGM0IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Marcas Propias</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse103"
                        aria-expanded="true" aria-controls="collapse103">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Supply</span>
                    </a>
                    <div id="collapse103" class="collapse" aria-labelledby="heading103" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Supply BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNGQ3ZTcwMTMtZWY2Mi00YTc4LTgzYzYtMTdkZTE4NDJhYzc2IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Supply</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiMmU3OWE0YWMtOGVjMy00NDU1LTliZmMtZWRlYzNjYzI2OTg0IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Edad del Inventario</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse104"
                        aria-expanded="true" aria-controls="collapse104">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Crm</span>
                    </a>
                    <div id="collapse104" class="collapse" aria-labelledby="heading104" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Crm BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiZmY4MGVjNzAtMTA5Zi00MmZiLTliNWItYzNjZmRiZmNjNGU2IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectionc213d6a2706d729f2515">Crm</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNDgwMTk3ZWUtNjQ0Ni00YjRmLTg3ZDQtMzZmYmRmOGY1MjEzIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Crm - Rfm</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiY2MxYmMxYzQtOWEzZS00MmExLWIxYzMtYmVkYzg2YzI3ZTk0IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Compras por Clientes</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse106"
                        aria-expanded="true" aria-controls="collapse106">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Mercadeo</span>
                    </a>
                    <div id="collapse106" class="collapse" aria-labelledby="heading106" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Mercadeo BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNzI0ZTNhY2QtMzk1Yi00ZWUwLWIxZGUtNTI4Y2Y1MWI5M2E0IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">IRS Cromantic</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYzNjMzAwMzMtODA5Zi00MzFjLTgxMWUtYWJiZmUwY2YyZjU2IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectionbbf50c3a839bc9c289e3">IRS Blind</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYmVjYjRkMjYtNmU1Yy00ZDU5LWI2ODEtNDQ0YWUzM2QyMTQ5IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSection">Influenciadoras</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNjQyZDc3MmUtY2ZhOC00MDNkLWJhOTgtZTE2MmZhZTY5YTRhIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Pauta Blind</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYjczNTk1MDctOGY5MC00MTQxLWJjMmQtNDY5NmZhYjc0NjdlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Experiencias Prosalon</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiZDA1NDVhMWYtYjY1MC00MzhlLWJjMTUtYTQ3NmQwOWJjNjBiIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectiona31364f5f8d9da86218b">Punto de Gondola</a>
                        </div>
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Pauta Cromantic</h6>
                            <a class="collapse-item" target="proyector" href="https://platform.datorama.com/external/dashboard?embedpage=253270ed-0a1f-4760-a683-c24a33025846">Pauta Datorama Social</a>
                            <a class="collapse-item" target="proyector" href="https://platform.datorama.com/external/dashboard?embedpage=00330952-f19b-41cf-a8ca-1bb82f405acf">Pauta Datorama Semanal</a>
                            <a class="collapse-item" target="proyector" href="https://platform.datorama.com/external/dashboard?embedpage=454b91ff-d623-4ae2-9a3e-ace08dcdb847">Pauta Datorama Mensual</a>
                        </div>

                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse107"
                        aria-expanded="true" aria-controls="collapse107">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Audiencias</span>
                    </a>
                    <div id="collapse107" class="collapse" aria-labelledby="heading107" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Audiencias BI:</h6>
                            <a class="collapse-item" target="proyector" href="#">Audiencia 1</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse110"
                        aria-expanded="true" aria-controls="collapse110">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>HR</span>
                    </a>
                    <div id="collapse110" class="collapse" aria-labelledby="heading110" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">HR BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNDdhNDBmYjctOWJjZi00NDdmLWE5OTQtMjE3NTA3YmM2YjhlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Rotación y Encuesta de salida</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNTVjMTdhNGItODEyMi00N2IxLWEyZDYtOThkOGQ5MzM1N2EzIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Web</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiMmEwYzZlNzItNzAxZS00NjA5LWI3ZmUtZGYxYmM5NDYxNWUwIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Demografico</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiMGMwNzA5ZmYtM2ExMy00ZTNiLTg4NmEtYWQxNzBmMTZmNmI1IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSection960e31632a9315c720b3">Formación</a>
                        </div>
                    </div>
                </li>
            <?php } ?>

            <!-- Nav Item - Operaciones, Financiero Collapse Menu -->
            <?php if($tipo_usuario == 116) { ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse101"
                        aria-expanded="true" aria-controls="collapse101">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Operaciones</span>
                    </a>
                    <div id="collapse101" class="collapse" aria-labelledby="heading101" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Operaciones BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYjRiMjZiMjMtZjJlNi00M2VjLTlmMzEtMWU2OGZmZWI4MzI3IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectionf9da565129d2b54b9c1a">Flash de Ventas</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYTA2ZjY2ZWYtZWJjZS00NDc4LTk1MzgtNzhjNGU2NGU2MGRlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Así Vamos</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNmExYmVmYjYtM2VkYS00YTNmLWFkMmQtZDkwNjg1MDY5NjMwIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Así Vamos Clientes</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYjczNTk1MDctOGY5MC00MTQxLWJjMmQtNDY5NmZhYjc0NjdlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Experiencias Prosalon</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse108"
                        aria-expanded="true" aria-controls="collapse108">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Financiero</span>
                    </a>
                    <div id="collapse108" class="collapse" aria-labelledby="heading108" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Financiero BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiMWJiOWJjMmYtNjEyZS00MDA2LTk4ZTYtYzIwNmNlMmFjN2YwIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">P&G Comercial</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiY2Y0YzM0NzEtNDA4MS00NmFhLWEzMDYtYWRiYWNhYzU0N2Y5IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSection394b7cfe3b4aa403e20b">P&G Financiero</a>
                        </div>
                    </div>
                </li>
            <?php } ?>

            <!-- Nav Item - Operaciones, Financiero, Ecommerce Collapse Menu -->
            <?php if($tipo_usuario == 117) { ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse101"
                        aria-expanded="true" aria-controls="collapse101">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Operaciones</span>
                    </a>
                    <div id="collapse101" class="collapse" aria-labelledby="heading101" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Operaciones BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYjRiMjZiMjMtZjJlNi00M2VjLTlmMzEtMWU2OGZmZWI4MzI3IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectionf9da565129d2b54b9c1a">Flash de Ventas</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYTA2ZjY2ZWYtZWJjZS00NDc4LTk1MzgtNzhjNGU2NGU2MGRlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Así Vamos</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNmExYmVmYjYtM2VkYS00YTNmLWFkMmQtZDkwNjg1MDY5NjMwIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Así Vamos Clientes</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYjczNTk1MDctOGY5MC00MTQxLWJjMmQtNDY5NmZhYjc0NjdlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Experiencias Prosalon</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse108"
                        aria-expanded="true" aria-controls="collapse108">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Financiero</span>
                    </a>
                    <div id="collapse108" class="collapse" aria-labelledby="heading108" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Financiero BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiMWJiOWJjMmYtNjEyZS00MDA2LTk4ZTYtYzIwNmNlMmFjN2YwIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">P&G Comercial</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiY2Y0YzM0NzEtNDA4MS00NmFhLWEzMDYtYWRiYWNhYzU0N2Y5IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSection394b7cfe3b4aa403e20b">P&G Financiero</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse105"
                        aria-expanded="true" aria-controls="collapse105">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Ecommerce</span>
                    </a>
                    <div id="collapse105" class="collapse" aria-labelledby="heading105" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Ecommerce BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNmNiNjk1M2ItNGNjOC00YWY2LWFkNWMtNzVmZDY1NmJkMDIzIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Analitycs</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiZWI1NTM1OTUtMWVmZS00OTA4LWFkNDctYWUzYTJlNzlmYjdlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSection960e31632a9315c720b3">App y Mkp</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNDNjOGZjZTQtOWRjNy00ZjcwLTllMjYtNTM3OGMyZWU4YTMwIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Digital</a>
                        </div>
                    </div>
                </li>
            <?php } ?>

            <!-- Nav Item - Operaciones, Financiero, Ecommerce Mercadeo Collapse Menu -->
            <?php if($tipo_usuario == 118) { ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse101"
                        aria-expanded="true" aria-controls="collapse101">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Operaciones</span>
                    </a>
                    <div id="collapse101" class="collapse" aria-labelledby="heading101" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Operaciones BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYjRiMjZiMjMtZjJlNi00M2VjLTlmMzEtMWU2OGZmZWI4MzI3IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectionf9da565129d2b54b9c1a">Flash de Ventas</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYTA2ZjY2ZWYtZWJjZS00NDc4LTk1MzgtNzhjNGU2NGU2MGRlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Así Vamos</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNmExYmVmYjYtM2VkYS00YTNmLWFkMmQtZDkwNjg1MDY5NjMwIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Así Vamos Clientes</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYjczNTk1MDctOGY5MC00MTQxLWJjMmQtNDY5NmZhYjc0NjdlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Experiencias Prosalon</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse108"
                        aria-expanded="true" aria-controls="collapse108">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Financiero</span>
                    </a>
                    <div id="collapse108" class="collapse" aria-labelledby="heading108" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Financiero BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiMWJiOWJjMmYtNjEyZS00MDA2LTk4ZTYtYzIwNmNlMmFjN2YwIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">P&G Comercial</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiY2Y0YzM0NzEtNDA4MS00NmFhLWEzMDYtYWRiYWNhYzU0N2Y5IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSection394b7cfe3b4aa403e20b">P&G Financiero</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse105"
                        aria-expanded="true" aria-controls="collapse105">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Ecommerce</span>
                    </a>
                    <div id="collapse105" class="collapse" aria-labelledby="heading105" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Ecommerce BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNmNiNjk1M2ItNGNjOC00YWY2LWFkNWMtNzVmZDY1NmJkMDIzIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Analitycs</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiZWI1NTM1OTUtMWVmZS00OTA4LWFkNDctYWUzYTJlNzlmYjdlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSection960e31632a9315c720b3">App y Mkp</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNDNjOGZjZTQtOWRjNy00ZjcwLTllMjYtNTM3OGMyZWU4YTMwIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Digital</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse106"
                        aria-expanded="true" aria-controls="collapse106">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Mercadeo</span>
                    </a>
                    <div id="collapse106" class="collapse" aria-labelledby="heading106" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Mercadeo BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNzI0ZTNhY2QtMzk1Yi00ZWUwLWIxZGUtNTI4Y2Y1MWI5M2E0IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">IRS Cromantic</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYzNjMzAwMzMtODA5Zi00MzFjLTgxMWUtYWJiZmUwY2YyZjU2IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectionbbf50c3a839bc9c289e3">IRS Blind</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYmVjYjRkMjYtNmU1Yy00ZDU5LWI2ODEtNDQ0YWUzM2QyMTQ5IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSection">Influenciadoras</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNjQyZDc3MmUtY2ZhOC00MDNkLWJhOTgtZTE2MmZhZTY5YTRhIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Pauta Blind</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYjczNTk1MDctOGY5MC00MTQxLWJjMmQtNDY5NmZhYjc0NjdlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Experiencias Prosalon</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiZDA1NDVhMWYtYjY1MC00MzhlLWJjMTUtYTQ3NmQwOWJjNjBiIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectiona31364f5f8d9da86218b">Punto de Gondola</a>
                        </div>
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Pauta Cromantic</h6>
                            <a class="collapse-item" target="proyector" href="https://platform.datorama.com/external/dashboard?embedpage=253270ed-0a1f-4760-a683-c24a33025846">Pauta Datorama Social</a>
                            <a class="collapse-item" target="proyector" href="https://platform.datorama.com/external/dashboard?embedpage=00330952-f19b-41cf-a8ca-1bb82f405acf">Pauta Datorama Semanal</a>
                            <a class="collapse-item" target="proyector" href="https://platform.datorama.com/external/dashboard?embedpage=454b91ff-d623-4ae2-9a3e-ace08dcdb847">Pauta Datorama Mensual</a>
                        </div>

                    </div>
                </li>
            <?php } ?>

            <!-- Nav Item - Operaciones, HR Collapse Menu -->
            <?php if($tipo_usuario == 119) { ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse101"
                        aria-expanded="true" aria-controls="collapse101">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Operaciones</span>
                    </a>
                    <div id="collapse101" class="collapse" aria-labelledby="heading101" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Operaciones BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYjRiMjZiMjMtZjJlNi00M2VjLTlmMzEtMWU2OGZmZWI4MzI3IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectionf9da565129d2b54b9c1a">Flash de Ventas</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYTA2ZjY2ZWYtZWJjZS00NDc4LTk1MzgtNzhjNGU2NGU2MGRlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Así Vamos</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNmExYmVmYjYtM2VkYS00YTNmLWFkMmQtZDkwNjg1MDY5NjMwIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Así Vamos Clientes</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYjczNTk1MDctOGY5MC00MTQxLWJjMmQtNDY5NmZhYjc0NjdlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Experiencias Prosalon</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse110"
                        aria-expanded="true" aria-controls="collapse110">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>HR</span>
                    </a>
                    <div id="collapse110" class="collapse" aria-labelledby="heading110" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">HR BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNDdhNDBmYjctOWJjZi00NDdmLWE5OTQtMjE3NTA3YmM2YjhlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Rotación y Encuesta de salida</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNTVjMTdhNGItODEyMi00N2IxLWEyZDYtOThkOGQ5MzM1N2EzIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Web</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiMmEwYzZlNzItNzAxZS00NjA5LWI3ZmUtZGYxYmM5NDYxNWUwIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Demografico</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiMGMwNzA5ZmYtM2ExMy00ZTNiLTg4NmEtYWQxNzBmMTZmNmI1IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSection960e31632a9315c720b3">Formación</a>
                        </div>
                    </div>
                </li>
            <?php } ?>

            <!-- Nav Item - HR Collapse Menu -->
            <?php if($tipo_usuario == 120) { ?>
                
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse110"
                        aria-expanded="true" aria-controls="collapse110">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>HR</span>
                    </a>
                    <div id="collapse110" class="collapse" aria-labelledby="heading110" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">HR BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNDdhNDBmYjctOWJjZi00NDdmLWE5OTQtMjE3NTA3YmM2YjhlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Rotación y Encuesta de salida</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNTVjMTdhNGItODEyMi00N2IxLWEyZDYtOThkOGQ5MzM1N2EzIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Web</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiMmEwYzZlNzItNzAxZS00NjA5LWI3ZmUtZGYxYmM5NDYxNWUwIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Demografico</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiMGMwNzA5ZmYtM2ExMy00ZTNiLTg4NmEtYWQxNzBmMTZmNmI1IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSection960e31632a9315c720b3">Formación</a>
                        </div>
                    </div>
                </li>
            <?php } ?>

            <!-- Nav Item - Ecommerce, Mercadeo Collapse Menu -->
            <?php if($tipo_usuario == 121) { ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse105"
                        aria-expanded="true" aria-controls="collapse105">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Ecommerce</span>
                    </a>
                    <div id="collapse105" class="collapse" aria-labelledby="heading105" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Ecommerce BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNmNiNjk1M2ItNGNjOC00YWY2LWFkNWMtNzVmZDY1NmJkMDIzIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Analitycs</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiZWI1NTM1OTUtMWVmZS00OTA4LWFkNDctYWUzYTJlNzlmYjdlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSection960e31632a9315c720b3">App y Mkp</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNDNjOGZjZTQtOWRjNy00ZjcwLTllMjYtNTM3OGMyZWU4YTMwIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Digital</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse106"
                        aria-expanded="true" aria-controls="collapse106">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Mercadeo</span>
                    </a>
                    <div id="collapse106" class="collapse" aria-labelledby="heading106" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Mercadeo BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNzI0ZTNhY2QtMzk1Yi00ZWUwLWIxZGUtNTI4Y2Y1MWI5M2E0IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">IRS Cromantic</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYzNjMzAwMzMtODA5Zi00MzFjLTgxMWUtYWJiZmUwY2YyZjU2IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectionbbf50c3a839bc9c289e3">IRS Blind</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYmVjYjRkMjYtNmU1Yy00ZDU5LWI2ODEtNDQ0YWUzM2QyMTQ5IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSection">Influenciadoras</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNjQyZDc3MmUtY2ZhOC00MDNkLWJhOTgtZTE2MmZhZTY5YTRhIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Pauta Blind</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYjczNTk1MDctOGY5MC00MTQxLWJjMmQtNDY5NmZhYjc0NjdlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Experiencias Prosalon</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiZDA1NDVhMWYtYjY1MC00MzhlLWJjMTUtYTQ3NmQwOWJjNjBiIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectiona31364f5f8d9da86218b">Punto de Gondola</a>
                        </div>
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Pauta Cromantic</h6>
                            <a class="collapse-item" target="proyector" href="https://platform.datorama.com/external/dashboard?embedpage=253270ed-0a1f-4760-a683-c24a33025846">Pauta Datorama Social</a>
                            <a class="collapse-item" target="proyector" href="https://platform.datorama.com/external/dashboard?embedpage=00330952-f19b-41cf-a8ca-1bb82f405acf">Pauta Datorama Semanal</a>
                            <a class="collapse-item" target="proyector" href="https://platform.datorama.com/external/dashboard?embedpage=454b91ff-d623-4ae2-9a3e-ace08dcdb847">Pauta Datorama Mensual</a>
                        </div>

                    </div>
                </li>
            <?php } ?>

            <!-- Nav Item - Financiero, HR Collapse Menu -->
            <?php if($tipo_usuario == 122) { ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse108"
                        aria-expanded="true" aria-controls="collapse108">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Financiero</span>
                    </a>
                    <div id="collapse108" class="collapse" aria-labelledby="heading108" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Financiero BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiMWJiOWJjMmYtNjEyZS00MDA2LTk4ZTYtYzIwNmNlMmFjN2YwIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">P&G Comercial</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiY2Y0YzM0NzEtNDA4MS00NmFhLWEzMDYtYWRiYWNhYzU0N2Y5IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSection394b7cfe3b4aa403e20b">P&G Financiero</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse110"
                        aria-expanded="true" aria-controls="collapse110">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>HR</span>
                    </a>
                    <div id="collapse110" class="collapse" aria-labelledby="heading110" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">HR BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNDdhNDBmYjctOWJjZi00NDdmLWE5OTQtMjE3NTA3YmM2YjhlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Rotación y Encuesta de salida</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNTVjMTdhNGItODEyMi00N2IxLWEyZDYtOThkOGQ5MzM1N2EzIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Web</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiMmEwYzZlNzItNzAxZS00NjA5LWI3ZmUtZGYxYmM5NDYxNWUwIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Demografico</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiMGMwNzA5ZmYtM2ExMy00ZTNiLTg4NmEtYWQxNzBmMTZmNmI1IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSection960e31632a9315c720b3">Formación</a>
                        </div>
                    </div>
                </li>

            <?php } ?>

            <!-- Nav Item - Marcas Propias Collapse Menu -->
            <?php if($tipo_usuario == 123) { ?>
                
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse102"
                        aria-expanded="true" aria-controls="collapse102">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Marcas Propias</span>
                    </a>
                    <div id="collapse102" class="collapse" aria-labelledby="heading102" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Marcas Propias BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiMzc5ZGI2MjItMDBlYS00ZTBlLWJmYjktMWI2ZjM0YjU0MGM0IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Marcas Propias</a>
                        </div>
                    </div>
                </li>
            <?php } ?>

            <!-- Nav Item - Mercadeo, HR Collapse Menu -->
            <?php if($tipo_usuario == 124) { ?>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse106"
                        aria-expanded="true" aria-controls="collapse106">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Mercadeo</span>
                    </a>
                    <div id="collapse106" class="collapse" aria-labelledby="heading106" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Mercadeo BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNzI0ZTNhY2QtMzk1Yi00ZWUwLWIxZGUtNTI4Y2Y1MWI5M2E0IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">IRS Cromantic</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYzNjMzAwMzMtODA5Zi00MzFjLTgxMWUtYWJiZmUwY2YyZjU2IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectionbbf50c3a839bc9c289e3">IRS Blind</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYmVjYjRkMjYtNmU1Yy00ZDU5LWI2ODEtNDQ0YWUzM2QyMTQ5IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSection">Influenciadoras</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNjQyZDc3MmUtY2ZhOC00MDNkLWJhOTgtZTE2MmZhZTY5YTRhIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Pauta Blind</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYjczNTk1MDctOGY5MC00MTQxLWJjMmQtNDY5NmZhYjc0NjdlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Experiencias Prosalon</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiZDA1NDVhMWYtYjY1MC00MzhlLWJjMTUtYTQ3NmQwOWJjNjBiIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectiona31364f5f8d9da86218b">Punto de Gondola</a>
                        </div>
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Pauta Cromantic</h6>
                            <a class="collapse-item" target="proyector" href="https://platform.datorama.com/external/dashboard?embedpage=253270ed-0a1f-4760-a683-c24a33025846">Pauta Datorama Social</a>
                            <a class="collapse-item" target="proyector" href="https://platform.datorama.com/external/dashboard?embedpage=00330952-f19b-41cf-a8ca-1bb82f405acf">Pauta Datorama Semanal</a>
                            <a class="collapse-item" target="proyector" href="https://platform.datorama.com/external/dashboard?embedpage=454b91ff-d623-4ae2-9a3e-ace08dcdb847">Pauta Datorama Mensual</a>
                        </div>

                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse110"
                        aria-expanded="true" aria-controls="collapse110">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>HR</span>
                    </a>
                    <div id="collapse110" class="collapse" aria-labelledby="heading110" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">HR BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNDdhNDBmYjctOWJjZi00NDdmLWE5OTQtMjE3NTA3YmM2YjhlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Rotación y Encuesta de salida</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNTVjMTdhNGItODEyMi00N2IxLWEyZDYtOThkOGQ5MzM1N2EzIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Web</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiMmEwYzZlNzItNzAxZS00NjA5LWI3ZmUtZGYxYmM5NDYxNWUwIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Demografico</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiMGMwNzA5ZmYtM2ExMy00ZTNiLTg4NmEtYWQxNzBmMTZmNmI1IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSection960e31632a9315c720b3">Formación</a>
                        </div>
                    </div>
                </li>
            <?php } ?>

            <!-- Nav Item - Todos Collapse Menu -->
            <?php if($tipo_usuario == 115) { ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse101"
                        aria-expanded="true" aria-controls="collapse101">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Operaciones</span>
                    </a>
                    <div id="collapse101" class="collapse" aria-labelledby="heading101" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Operaciones BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYjRiMjZiMjMtZjJlNi00M2VjLTlmMzEtMWU2OGZmZWI4MzI3IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectionf9da565129d2b54b9c1a">Flash de Ventas</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYTA2ZjY2ZWYtZWJjZS00NDc4LTk1MzgtNzhjNGU2NGU2MGRlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Así Vamos</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNmExYmVmYjYtM2VkYS00YTNmLWFkMmQtZDkwNjg1MDY5NjMwIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Así Vamos Clientes</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYjczNTk1MDctOGY5MC00MTQxLWJjMmQtNDY5NmZhYjc0NjdlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Experiencias Prosalon</a>
                        </div>
                    </div>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse102"
                        aria-expanded="true" aria-controls="collapse102">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Marcas Propias</span>
                    </a>
                    <div id="collapse102" class="collapse" aria-labelledby="heading102" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Marcas Propias BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiMzc5ZGI2MjItMDBlYS00ZTBlLWJmYjktMWI2ZjM0YjU0MGM0IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Marcas Propias</a>
                        </div>
                    </div>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse103"
                        aria-expanded="true" aria-controls="collapse103">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Supply</span>
                    </a>
                    <div id="collapse103" class="collapse" aria-labelledby="heading103" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Supply BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNGQ3ZTcwMTMtZWY2Mi00YTc4LTgzYzYtMTdkZTE4NDJhYzc2IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Supply</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiMmU3OWE0YWMtOGVjMy00NDU1LTliZmMtZWRlYzNjYzI2OTg0IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Edad del Inventario</a>
                        </div>
                    </div>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse104"
                        aria-expanded="true" aria-controls="collapse104">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Crm</span>
                    </a>
                    <div id="collapse104" class="collapse" aria-labelledby="heading104" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Crm BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiZmY4MGVjNzAtMTA5Zi00MmZiLTliNWItYzNjZmRiZmNjNGU2IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectionc213d6a2706d729f2515">Crm</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNDgwMTk3ZWUtNjQ0Ni00YjRmLTg3ZDQtMzZmYmRmOGY1MjEzIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Crm - Rfm</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiY2MxYmMxYzQtOWEzZS00MmExLWIxYzMtYmVkYzg2YzI3ZTk0IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Compras por Clientes</a>
                        </div>
                    </div>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse105"
                        aria-expanded="true" aria-controls="collapse105">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Ecommerce</span>
                    </a>
                    <div id="collapse105" class="collapse" aria-labelledby="heading105" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Ecommerce BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNmNiNjk1M2ItNGNjOC00YWY2LWFkNWMtNzVmZDY1NmJkMDIzIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Analitycs</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiZWI1NTM1OTUtMWVmZS00OTA4LWFkNDctYWUzYTJlNzlmYjdlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSection960e31632a9315c720b3">App y Mkp</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNDNjOGZjZTQtOWRjNy00ZjcwLTllMjYtNTM3OGMyZWU4YTMwIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Digital</a>
                        </div>
                    </div>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse106"
                        aria-expanded="true" aria-controls="collapse106">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Mercadeo</span>
                    </a>
                    <div id="collapse106" class="collapse" aria-labelledby="heading106" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Mercadeo BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNzI0ZTNhY2QtMzk1Yi00ZWUwLWIxZGUtNTI4Y2Y1MWI5M2E0IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">IRS Cromantic</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYzNjMzAwMzMtODA5Zi00MzFjLTgxMWUtYWJiZmUwY2YyZjU2IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectionbbf50c3a839bc9c289e3">IRS Blind</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYmVjYjRkMjYtNmU1Yy00ZDU5LWI2ODEtNDQ0YWUzM2QyMTQ5IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSection">Influenciadoras</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNjQyZDc3MmUtY2ZhOC00MDNkLWJhOTgtZTE2MmZhZTY5YTRhIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Pauta Blind</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYjczNTk1MDctOGY5MC00MTQxLWJjMmQtNDY5NmZhYjc0NjdlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Experiencias Prosalon</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiZDA1NDVhMWYtYjY1MC00MzhlLWJjMTUtYTQ3NmQwOWJjNjBiIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectiona31364f5f8d9da86218b">Punto de Gondola</a>
                        </div>
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Pauta Cromantic</h6>
                            <a class="collapse-item" target="proyector" href="https://platform.datorama.com/external/dashboard?embedpage=253270ed-0a1f-4760-a683-c24a33025846">Pauta Datorama Social</a>
                            <a class="collapse-item" target="proyector" href="https://platform.datorama.com/external/dashboard?embedpage=00330952-f19b-41cf-a8ca-1bb82f405acf">Pauta Datorama Semanal</a>
                            <a class="collapse-item" target="proyector" href="https://platform.datorama.com/external/dashboard?embedpage=454b91ff-d623-4ae2-9a3e-ace08dcdb847">Pauta Datorama Mensual</a>
                        </div>
            
                    </div>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse107"
                        aria-expanded="true" aria-controls="collapse107">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Audiencias</span>
                    </a>
                    <div id="collapse107" class="collapse" aria-labelledby="heading107" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Audiencias BI:</h6>
                            <a class="collapse-item" target="proyector" href="#">Audiencia 1</a>
                        </div>
                    </div>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse108"
                        aria-expanded="true" aria-controls="collapse108">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Financiero</span>
                    </a>
                    <div id="collapse108" class="collapse" aria-labelledby="heading108" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Financiero BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiMWJiOWJjMmYtNjEyZS00MDA2LTk4ZTYtYzIwNmNlMmFjN2YwIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">P&G Comercial</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiY2Y0YzM0NzEtNDA4MS00NmFhLWEzMDYtYWRiYWNhYzU0N2Y5IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSection394b7cfe3b4aa403e20b">P&G Financiero</a>
                        </div>
                    </div>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse111"
                        aria-expanded="true" aria-controls="collapse111">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>SAC</span>
                    </a>
                    <div id="collapse111" class="collapse" aria-labelledby="heading111" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">SAC BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiOTQ5ODE5MTUtNzljOC00YmI5LThiN2YtMTc3ODA0MGNlOWFiIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Blind</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiZTdmMjYyZjAtMDY2Ni00MjhhLTg5NzgtOTI2OGJiMDY3NjZkIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Cromantic</a>
                        </div>
                    </div>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse110"
                        aria-expanded="true" aria-controls="collapse110">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>HR</span>
                    </a>
                    <div id="collapse110" class="collapse" aria-labelledby="heading110" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">HR BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNDdhNDBmYjctOWJjZi00NDdmLWE5OTQtMjE3NTA3YmM2YjhlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Rotación y Encuesta de salida</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNTVjMTdhNGItODEyMi00N2IxLWEyZDYtOThkOGQ5MzM1N2EzIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Web</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiMmEwYzZlNzItNzAxZS00NjA5LWI3ZmUtZGYxYmM5NDYxNWUwIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Demografico</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiMGMwNzA5ZmYtM2ExMy00ZTNiLTg4NmEtYWQxNzBmMTZmNmI1IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSection960e31632a9315c720b3">Formación</a>
                        </div>
                    </div>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">
            
                <!-- Nav Item - Charts -->
                            <li class="nav-item">
                                <a class="nav-link" href="tabla.php">
                                    <i class="fas fa-fw fa-chart-area"></i>
                                    <span>Usuarios y Perfiles</span></a>
                            </li>
            
                            <!-- Nav Item - Tables -->
                            <li class="nav-item">
                                <a class="nav-link" target="_blank" href="accesos.php">
                                    <i class="fas fa-fw fa-table"></i>
                                    <span>Accesos</span></a>
                            </li>
            
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
            <?php if($tipo_usuario == 113) { ?>            
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse101"
                        aria-expanded="true" aria-controls="collapse101">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Operaciones</span>
                    </a>
                    <div id="collapse101" class="collapse" aria-labelledby="heading101" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Operaciones BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYjRiMjZiMjMtZjJlNi00M2VjLTlmMzEtMWU2OGZmZWI4MzI3IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectionf9da565129d2b54b9c1a">Flash de Ventas</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYTA2ZjY2ZWYtZWJjZS00NDc4LTk1MzgtNzhjNGU2NGU2MGRlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Así Vamos</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNmExYmVmYjYtM2VkYS00YTNmLWFkMmQtZDkwNjg1MDY5NjMwIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Así Vamos Clientes</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYjczNTk1MDctOGY5MC00MTQxLWJjMmQtNDY5NmZhYjc0NjdlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Experiencias Prosalon</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse102"
                        aria-expanded="true" aria-controls="collapse102">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Marcas Propias</span>
                    </a>
                    <div id="collapse102" class="collapse" aria-labelledby="heading102" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Marcas Propias BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiMzc5ZGI2MjItMDBlYS00ZTBlLWJmYjktMWI2ZjM0YjU0MGM0IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Marcas Propias</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse103"
                        aria-expanded="true" aria-controls="collapse103">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Supply</span>
                    </a>
                    <div id="collapse103" class="collapse" aria-labelledby="heading103" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Supply BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNGQ3ZTcwMTMtZWY2Mi00YTc4LTgzYzYtMTdkZTE4NDJhYzc2IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Supply</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiMmU3OWE0YWMtOGVjMy00NDU1LTliZmMtZWRlYzNjYzI2OTg0IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Edad del Inventario</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse104"
                        aria-expanded="true" aria-controls="collapse104">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Crm</span>
                    </a>
                    <div id="collapse104" class="collapse" aria-labelledby="heading104" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Crm BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiZmY4MGVjNzAtMTA5Zi00MmZiLTliNWItYzNjZmRiZmNjNGU2IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectionc213d6a2706d729f2515">Crm</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNDgwMTk3ZWUtNjQ0Ni00YjRmLTg3ZDQtMzZmYmRmOGY1MjEzIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Crm - Rfm</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiY2MxYmMxYzQtOWEzZS00MmExLWIxYzMtYmVkYzg2YzI3ZTk0IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Compras por Clientes</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse105"
                        aria-expanded="true" aria-controls="collapse105">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Ecommerce</span>
                    </a>
                    <div id="collapse105" class="collapse" aria-labelledby="heading105" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Ecommerce BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNmNiNjk1M2ItNGNjOC00YWY2LWFkNWMtNzVmZDY1NmJkMDIzIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Analitycs</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiZWI1NTM1OTUtMWVmZS00OTA4LWFkNDctYWUzYTJlNzlmYjdlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSection960e31632a9315c720b3">App y Mkp</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNDNjOGZjZTQtOWRjNy00ZjcwLTllMjYtNTM3OGMyZWU4YTMwIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Digital</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse106"
                        aria-expanded="true" aria-controls="collapse106">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Mercadeo</span>
                    </a>
                    <div id="collapse106" class="collapse" aria-labelledby="heading106" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Mercadeo BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNzI0ZTNhY2QtMzk1Yi00ZWUwLWIxZGUtNTI4Y2Y1MWI5M2E0IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">IRS Cromantic</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYzNjMzAwMzMtODA5Zi00MzFjLTgxMWUtYWJiZmUwY2YyZjU2IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectionbbf50c3a839bc9c289e3">IRS Blind</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYmVjYjRkMjYtNmU1Yy00ZDU5LWI2ODEtNDQ0YWUzM2QyMTQ5IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSection">Influenciadoras</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNjQyZDc3MmUtY2ZhOC00MDNkLWJhOTgtZTE2MmZhZTY5YTRhIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Pauta Blind</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiYjczNTk1MDctOGY5MC00MTQxLWJjMmQtNDY5NmZhYjc0NjdlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Experiencias Prosalon</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiZDA1NDVhMWYtYjY1MC00MzhlLWJjMTUtYTQ3NmQwOWJjNjBiIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSectiona31364f5f8d9da86218b">Punto de Gondola</a>
                        </div>
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Pauta Cromantic</h6>
                            <a class="collapse-item" target="proyector" href="https://platform.datorama.com/external/dashboard?embedpage=253270ed-0a1f-4760-a683-c24a33025846">Pauta Datorama Social</a>
                            <a class="collapse-item" target="proyector" href="https://platform.datorama.com/external/dashboard?embedpage=00330952-f19b-41cf-a8ca-1bb82f405acf">Pauta Datorama Semanal</a>
                            <a class="collapse-item" target="proyector" href="https://platform.datorama.com/external/dashboard?embedpage=454b91ff-d623-4ae2-9a3e-ace08dcdb847">Pauta Datorama Mensual</a>
                        </div>

                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse107"
                        aria-expanded="true" aria-controls="collapse107">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Audiencias</span>
                    </a>
                    <div id="collapse107" class="collapse" aria-labelledby="heading107" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Audiencias BI:</h6>
                            <a class="collapse-item" target="proyector" href="#">Audiencia 1</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse108"
                        aria-expanded="true" aria-controls="collapse108">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Financiero</span>
                    </a>
                    <div id="collapse108" class="collapse" aria-labelledby="heading108" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Financiero BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiMWJiOWJjMmYtNjEyZS00MDA2LTk4ZTYtYzIwNmNlMmFjN2YwIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">P&G Comercial</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiY2Y0YzM0NzEtNDA4MS00NmFhLWEzMDYtYWRiYWNhYzU0N2Y5IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSection394b7cfe3b4aa403e20b">P&G Financiero</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse111"
                        aria-expanded="true" aria-controls="collapse111">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>SAC</span>
                    </a>
                    <div id="collapse111" class="collapse" aria-labelledby="heading111" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">SAC BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiOTQ5ODE5MTUtNzljOC00YmI5LThiN2YtMTc3ODA0MGNlOWFiIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Blind</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiZTdmMjYyZjAtMDY2Ni00MjhhLTg5NzgtOTI2OGJiMDY3NjZkIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Cromantic</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse110"
                        aria-expanded="true" aria-controls="collapse110">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>HR</span>
                    </a>
                    <div id="collapse110" class="collapse" aria-labelledby="heading110" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">HR BI:</h6>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNDdhNDBmYjctOWJjZi00NDdmLWE5OTQtMjE3NTA3YmM2YjhlIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Rotación y Encuesta de salida</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiNTVjMTdhNGItODEyMi00N2IxLWEyZDYtOThkOGQ5MzM1N2EzIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Web</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiMmEwYzZlNzItNzAxZS00NjA5LWI3ZmUtZGYxYmM5NDYxNWUwIiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9">Demografico</a>
                            <a class="collapse-item" target="proyector" href="https://app.powerbi.com/view?r=eyJrIjoiMGMwNzA5ZmYtM2ExMy00ZTNiLTg4NmEtYWQxNzBmMTZmNmI1IiwidCI6IjNmOTU5M2UxLTU1ZGEtNDQyZi05M2RkLTU3Y2NmNzVmNGI3OCIsImMiOjR9&pageName=ReportSection960e31632a9315c720b3">Formación</a>
                        </div>
                    </div>
                </li>

                <!-- Divider -->
                 <hr class="sidebar-divider d-none d-md-block">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Administrador
                </div>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                        aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Usuarios</span>
                    </a>
                    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Login Screens:</h6>
                            <a class="collapse-item" target="proyector" href="#">Registro de Usuarios</a>
                            <a class="collapse-item" target="proyector" href="#">Cambiar Password</a>
                            <div class="collapse-divider"></div>
                            <h6 class="collapse-header">Paginas de Error:</h6>
                            <a class="collapse-item" target="proyector" href="404.html">Pagina de Error 404</a>
                            <a class="collapse-item" target="proyector" href="blank.html">Pagina en Blanco</a>
                        </div>
                    </div>
                </li>

                <!-- Nav Item - Charts -->
                <li class="nav-item">
                    <a class="nav-link" href="accesos.php">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Ver Accesos</span></a>
                </li>

                <!-- Nav Item - Tables -->
                <li class="nav-item">
                    <a class="nav-link" target="_blank" href="tabla.php">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Usuarios y Perfiles</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>
            <?php } ?>
            

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

                    <div class="row">
                        <!-- Content Column -->
                         <div class="col-lg-12 mb-4">

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-4">
                                    <h6 class="m-0 font-weight-bold text-primary">Illustración</h6>
                                </div>
                                <div class="card-body">
                                    
                                        <iframe class="frame" name="proyector" src="about:blank" width="1000px" height="929px" frameborder="0"></iframe>
                                                                  
                                    
                                </div>
                            </div>

                            <!-- Approach -->
                            

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
                <div class="modal-body">Seleccione "Salir", Si realmente quiere terminar la sesion.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="index.php">Salir</a>
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
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>