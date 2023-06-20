<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = 'masao'; // usando notebook
    $database = 'prova2';
    $port = 3306;
    $con = mysqli_connect($hostname, $username, $password, $database, $port);
    if(mysqli_connect_errno()){
        printf("Erro na conexão: %s\n",
            mysqli_connect_error());
            exit();
    }
?>