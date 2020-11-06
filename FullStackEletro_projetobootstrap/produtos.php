<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "fseletro";

//criando a conexão
$conn = mysqli_connect($servername, $username, $password, $database);

//verificando a conexão
if (!$conn) {
    die("A conexão ao BD falhou: " . mysqli_connect_error());
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Full Stack Eletro</title>
    <link rel="stylesheet" href="css/estilo.css">
    <!--CSS-->
    <script src="js/funçoes.js"></script>
    <!--JS-->
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.Bootstrapcdn.com/Bootstrap/4.1.3/css/Bootstrap-theme.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

    <section class="container container-fluid">
        <!-- Início do menu -->

        <?php
        include('menu.html');
        ?>
        <!-- Fim do menu -->
        <h1>Produtos</h1>
        <hr>
        </div>


        <div class="container-fluid">

            <div class="row">
                <div class="col-md-3">
                    <nav class="navbar navbar-expand-lg navbar-light bg-danger"><br />
                        
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul>
                            <a class="navbar-brand" href="#">Categorias</a><br />
                                <li class="lista" onclick="exibir_todos()">Todos (14)</li><br />
                                <li class="lista" onclick="exibir_categoria('geladeiras')">Geladeiras (3)</li><br />
                                <li class="lista" onclick="exibir_categoria('fogoes')">Fogões (2)</li><br />
                                <li class="lista" onclick="exibir_categoria('microondas')">Microondas (3)</li><br />
                                <li class="lista" onclick="exibir_categoria('lavaroupas')">Lavadoras de roupas (2)</li><br />
                                <li class="lista" onclick="exibir_categoria('lavalouças')">Lava-louças (1)</li><br />
                                <li class="lista" onclick="exibir_categoria('televisores')">Televisores (1)</li><br />
                                <li class="lista" onclick="exibir_categoria('videogames')">Video-games (1)</li><br />
                            </ul>
                        </div>
                    </nav>

                </div>



                <div class="col-lg-8">
                    <?php
                    $sql = "select * from produtos";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($rows = $result->fetch_assoc()) {

                    ?>

                         
                            <div class=" row-3 col-3 m-4 p-2 box_produto" id="<?php echo $rows["categorias"]; ?>" style="display: inline-block" ; onclick="destaque(this)">
                         
                              <img class=" imagemProduto" src="<?php echo $rows["nomeimg"]; ?>" alt="<?php echo $rows["descricao"]; ?>" style="width: 120px" onclick="destaque(this)">
                                <br />
                           
                               
                                <p class=" nomeProdutos"><?php echo $rows["descricao"]; ?></p>
                                <hr>
                                <p class="  precoAntigo"><?php echo $rows["preco"]; ?></p>
                                <p class=" precoAtual"><?php echo $rows["precofinal"]; ?></p><br />
                        
                        </div>



                    <?php
                        }
                    } else {
                        echo "Nenhum produto cadastrado!";
                    }
                    ?>
                </div>
            </div>
        </div>


        <footer class=" container-fluid rodape">
            <p id="formasPagamento">Formas de pagamento</p>
            <img width="400px" src="./imagens/bandeira_cartoes.png" alt="Formas de pagamento">
            <p>&copy; Recode Pro</p>
        </footer>



        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>