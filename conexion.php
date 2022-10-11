<?php
    $host = "localhost";/*host*/
    $user = "";/*usuario de base de datos */
    $clave = "";/*clave de la base de datos */
    $bd = "";/*nombre de la base de datos */
    $conexion = mysqli_connect($host,$user,$clave,$bd);/*conexion con la base de datos y carga de datos */
    if (mysqli_connect_errno()){
        echo "No se pudo conectar a la base de datos";/*si no se conecta a la base de datos */
        exit(); /*Salida*/
    }
    mysqli_select_db($conexion,$bd) or die("No se encuentra la base de datos"); /*si no se encuentra la base de datos */
    mysqli_set_charset($conexion,"utf8");


    
