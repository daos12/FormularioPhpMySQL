<?php
    $servername = "localhost";  //padrão - server local
    $username   = "root";       //padrão root
    $password   = "";           //senha conexão banco de dados
    $database   = "loja";       //alterar conforme o nome do bando de dados

    //Criando a conexão
    $conexao = mysqli_connect($servername,$username,$password,$database);
    mysqli_set_charset($conexao,"utf8");
?>
