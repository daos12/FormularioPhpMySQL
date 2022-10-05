<?php
    include 'conexao.php';
    $id = $_POST['id'];
    
    //não tem ID PRODUTO!
    $numeroProduto  = $_POST['numeroProduto'];
    $nomeProduto    = $_POST['nomeProduto'];
    $qtdProduto     = $_POST['qtdProduto'];
    $catProduto     = $_POST['catProduto'];
    $fornProduto    = $_POST['fornProduto'];

    //Pegar comando update/atualizar no sql
    $sql = "UPDATE `produtos` SET `numeroProduto`= $numeroProduto,
    `nomeProduto`='$nomeProduto', `qtdProduto`= $qtdProduto,`catProduto`='$catProduto',`fornProduto`='$fornProduto' WHERE idProduto = $id";
       
    $atualizar = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <div class="container" style="width: 300px; text-align: center; padding-top: 50px;">
    <h4>Produto atualizado com Sucesso!</h4>
    <div style="padding-top: 20px;">
        <a href="listarProdutos.php" role="button" class="btn btn-sm btn-secondary">Voltar</a>
    </div>
</div>

