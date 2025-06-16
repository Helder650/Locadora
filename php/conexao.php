<?php
    session_start();
    $serverName = "localhost";
    $userAccess = "root";
    $password = "";
    $databaseName = "local_flix";

    $conexao = new mysqli($serverName, $userAccess, $password, $databaseName); ?>
