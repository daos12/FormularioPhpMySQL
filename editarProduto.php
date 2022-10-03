<?php
    include 'conexao.php';
    $id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="pr-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Edição Produtos</title>
</head>

<body>
    <div class="container tamanhoContainer" style="margin-top: 40px">
        <form action="atualizarProduto.php" method="post"> <!-- Criar um novo arquivo php -->
            <!-- Inserir php  -->
            <?php
                //Pegar código no sql select 
                $sql = "SELECT * FROM `produtos` WHERE idProduto = $id"; 
                
                $buscar = mysqli_query($conexao,$sql);
                
                while($array = mysqli_fetch_array($buscar)){
                //pegar codigo abaixo no documento listarProdutos.php
                    $idProduto      = $array['idProduto'];
                    $numeroProduto  = $array['numeroProduto'];
                    $nomeProduto    = $array['nomeProduto'];
                    $qtdProduto     = $array['qtdProduto'];
                    $catProduto     = $array['catProduto'];
                    $fornProduto    = $array['fornProduto'];
                
                    //Finalizar o } no final do form abaixo
                    //retirar o placeholder e autocomplete e required dos formularios 
            ?>

            <h3 style="text-align: center;">Editar o produto</h3><br>

            <div class="form-group">
                <label>Numero do Produto: </label>
                <!-- Adicionando para traser as infos do banco como get -->
                <input type="number" class="form-control" name="numeroProduto" value="<?php echo $numeroProduto?>"> 

                <input type="number" class="form-control" name="id" value = "<?php echo $id?>" style="display: none"> <!-- Inserir no final para add ID -->

            </div>
            <div class="form-group">
                <label>Nome do Produto: </label>
                <input type="text" class="form-control" name="nomeProduto" value="<?php echo $nomeProduto?>">
            </div>
            <div class="form-group">
                <label>Quantidade: </label>
                <input type="number" class="form-control" name="qtdProduto" value="<?php echo $qtdProduto?>" >
            </div>
            <div class="form-group">
                <label>Categoria</label>
                <select class="form-control" name="catProduto">

                    <option>Periféricos</option>
                    <option>Hardware</option>
                    <option>Software</option>
                    <option>Headsets</option>
                </select>
            </div>
            <div class="form-group">
                <label>Fornecedores</label>
                <select class="form-control" name="fornProduto" >

                    <option>Microsoft </option>
                    <option>Aplee</option>
                    <option>Lenovo</option>
                    <option>Multilaiser</option>
                </select>
            </div>
            <div class="botao">
                <button type="submit" class="btn btn-secondary">Atualizar</button> <!-- Alterar type para submit-->
            </div>
            <?php } ?>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>