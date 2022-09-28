<!DOCTYPE html>
<html lang="pr-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Formulário de Cadastrooooo</title>
</head>

<body>
    <div class="container tamanhoContainer" style="margin-top: 40px">
        <!--tamanho container para dimensionar-->
        <!--Inserindo provisoriamente, depois repassar para o css-->
        <form action="inserirProduto.php" method="post">
            <!-- action Para onde vai encaminhar as informações, ainda criaremos, mostrar no final-->
            <!--method post = Existem o post = enviar e o get = pegar o valor -->
            <h3 style="text-align: center;">Formulário de Cadastro</h3><br>
            <!--Parte de formularios, somente primeira parte-->
            <div class="form-group">
                <label>Numero do Produto: </label>
                <input type="number" class="form-control" name="numeroProduto" placeholder="Insira o codigo de seu produto" autocomplete="off" required>
                <!--name e required-->
            </div>
            <div class="form-group">
                <label>Nome do Produto: </label>
                <input type="text" class="form-control" name="nomeProduto" placeholder="Insira o nome do produto" autocomplete="off" required>
                <!--name e required-->
            </div>
            <div class="form-group">
                <label>Quantidade: </label>
                <input type="number" class="form-control" name="qtdProduto" placeholder="Insira a quantidade de seu produto" autocomplete="off" required>
                <!--name e required-->
            </div>
            <div class="form-group">
                <!--Aba formularios, Campos de formulário somente parte do select-->
                <label>Categoria</label>
                <select class="form-control" name="catProduto" required>
                    <!--name e required-->
                    <option>Periféricos</option>
                    <option>Hardware</option>
                    <option>Software</option>
                    <option>Headsets</option>
                </select>
            </div>
            <div class="form-group">
                <label>Fornecedores</label>
                <select class="form-control" name="fornProduto" required>
                    <!--name e required-->
                    <option>Microsoft </option>
                    <option>Aplee</option>
                    <option>Lenovo</option>
                    <option>Multilaiser</option>
                </select>
            </div>
            <div class="botao">
                <!--Botão para direita css, boas praticas-->
                <button type="submit" class="btn btn-secondary">Cadastrar</button> <!-- Alterar type para submit-->
            </div>
        </form>
        <!--Criar no css o tamanho do container-->
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>