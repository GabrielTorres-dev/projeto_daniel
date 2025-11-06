<?php

    $conexao = mysqli_connect("localhost", "root", "" );

    $db = mysqli_select_db($conexao, "projeto_1");

    if(!$conexao){
        echo "<h2> Erro na conexão ao banco de dados </h2>";
    }
?>