<?php

//$mysqli = new mysqli("localhost", "admtableros_ustable", "8UY}+VoeGgHw", "admtableros_prosalon_tableros_Bi");
$mysqli = new mysqli("localhost", "root", "", "prosalon_tableros_Bi");
//$connexion= mysqli_connect("10.0.7.4", "admtableros_ustable", "8UY}+VoeGgHw", "admtableros_prosalon_tableros_Bi ")


    if ($mysqli){
            //echo 'Conexion exitosa';
        }else{
            echo 'No hubo conexion a bd';
            }


?>