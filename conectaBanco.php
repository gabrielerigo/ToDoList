<?php
    $host = "localhost";
    $usuario = "root";
    $senha = "root";

    $con = mysql_connect($host, $usuario, $senha);

    if (!$con){
        echo utf8_encode("Erro durante a conex�o: " .mysql_error());
        exit();
    }

    $select = mysql_select_db("toDoList");

    if (!$select){
        echo utf8_encode("Falha ao selecionar banco: " .mysql_error());
    }
?> 