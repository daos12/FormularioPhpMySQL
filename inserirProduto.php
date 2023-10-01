<?php
//comentario
//inserir primeiramente as variais que iram receber, variaveis se iniciam com $
include 'conexao.php';

    $numeroProduto  = $_POST['numeroProduto'];
    $nomeProduto    = $_POST['nomeProduto'];
    $qtdProduto     = $_POST['qtdProduto'];
    $catProduto     = $_POST['catProduto'];
    $fornProduto    = $_POST['fornProduto'];

    //echo serve para imprimir, mostrar, mostrar como primeiro exemplo
    // echo $numeroProduto;
    // echo $nomeProduto;
    // echo $qtdProduto;
    // echo $catProduto;
    // echo $fornProduto;

    // $sql = "INSERT INTO" dar como exemplo manual

    //testar com echo primeiramente para ver se as informações estão sendo inseridas
    //Depois que executar teste, colar no comando do banco de dados para testar
    $sql = "INSERT INTO `produtos`(`numeroProduto`, `nomeProduto`, `qtdProduto`, `catProduto`, `fornProduto`) 
    VALUES ($numeroProduto, '$nomeProduto', $qtdProduto, '$catProduto', '$fornProduto')";

    //inserir depois
    $inserir = mysqli_query($conexao, $sql);
?>

    <!-- Adiciona para ter um retorno apos cadastro -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<div class="container" style="width: 300px; text-align: center; padding-top: 50px;">
    <h4>Produto Adicionado com Sucesso!</h4>
    <div style="padding-top: 20px;">
        <a href="index.php" role="button" class="btn btn-sm btn-secondary">Voltar</a>
    </div>
</div>