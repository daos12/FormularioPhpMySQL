<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Produtos Cadastrados</title>
</head>

<body>
    <div class="container">
        <h3>Listagem de Produtos</h3>
        <!-- Pegar segunda tabela do bootstrap -->
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Número</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Estoque</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Fornecedor</th>
                    <th scope="col">Ação</th> <!-- Colocar depois que a visualização funcionar -->
                </tr>
            </thead>
            
                    <?php
                    include 'conexao.php';
                    $sql = "SELECT * FROM `produtos`";
                    $busca = mysqli_query($conexao, $sql);

                    while ($array = mysqli_fetch_array($busca)) {
                        $idProduto      = $array['idProduto'];
                        $numeroProduto  = $array['numeroProduto'];
                        $nomeProduto    = $array['nomeProduto'];
                        $qtdProduto     = $array['qtdProduto'];
                        $catProduto     = $array['catProduto'];
                        $fornProduto    = $array['fornProduto'];
                    
                    ?>
                <tr>
                    <td><?php echo $numeroProduto; ?> </td>
                    <td><?php echo $nomeProduto; ?> </td>
                    <td><?php echo $qtdProduto; ?> </td>
                    <td><?php echo $catProduto; ?> </td>
                    <td><?php echo $fornProduto; ?> </td>
                    <td><a class="btn btn-secundary" style="text-decoration: none; color: blue ;" 
                        href="editarProduto.php?id=<?php echo $idProduto?>" role="button">Editar</a> <!-- Botão EDITAR -->
                    
                        <a class="btn btn-secundary" style="text-decoration: none; color: red ;" 
                        href="deletarProduto.php?id=<?php echo $idProduto?>" role="button">Excluir</a><!-- Botão EXCLUIR -->
                    
                    
                    </td>   <!-- Colocar depois que a visualização funcionar -->
                            <!-- Mostrar as mudanças do id na parte de baixo do site -->
                    
                </tr>

            <?php } ?>
        </table>
    </div>





</body>

</html>