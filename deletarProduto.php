<?php
    include 'conexao.php';
    $id = $_GET['id'];
    
    //Pegar comando no banco de dados
    $sql = "DELETE FROM `produtos` WHERE idProduto = $id";
    $deletar = mysqli_query($conexao,$sql);
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <div class="container" style="width: 300px; text-align: center; padding-top: 50px;">
    <h4>Produto deletado com Sucesso!</h4>
    <div style="padding-top: 20px;">
        <a href="listarProdutos.php" role="button" class="btn btn-sm btn-secondary">Voltar</a>
    </div>
</div>