<?php

    $dbHost = 'Localhost';
    $dbUserName = 'root';
    $dbPassword = '';
    $dbName = 'formularioLightUp';

    $conexao = new mysqli($dbHost, $dbUserName, $dbPassword, $dbName);

    if ($conexao->connect_errno) 
    {
        echo "Erro de conexão!";
    }
    else
    {
        echo "Conexão efetuada com sucesso!!";
    }
?>