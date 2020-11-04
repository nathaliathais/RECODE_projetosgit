<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "fseletro";

    //criando a conexão
    $conn = mysqli_connect($servername, $username, $password, $database);
 
    //verificando a conexão
    if (!$conn) {
        die("A conexão ao BD falhou: ". mysqli_connect_error());
    }

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Full Stack Eletro</title>
    <link rel="stylesheet" href="css/estilo.css">
    <!--link css-->
    <script src="js/funçoes.js"></script>
</head>

<body>
    <!-- Início do menu -->
    <?php

        include('menu.html');
    ?>
    <!-- Fim do menu -->
    <header>
        <h1>Produtos</h1>
        <hr>
    </header>


    <div class="categorias">
        <h2>Categorias</h2>
        <ul>
            <li class="lista" onclick="exibir_todos()">Todos (14)</li><br />
            <li class="lista" onclick="exibir_categoria('geladeiras')">Geladeiras (3)</li><br />
            <li class="lista" onclick="exibir_categoria('fogoes')">Fogões (2)</li><br />
            <li class="lista" onclick="exibir_categoria('microondas')">Microondas (3)</li><br />
            <li class="lista" onclick="exibir_categoria('lavaroupas')">Lavadoras de roupas (2)</li><br />
            <li class="lista" onclick="exibir_categoria('lavalouças')">Lava-louças (2)</li><br />
            <li class="lista" onclick="exibir_categoria('televisores')">Televisores (1)</li><br />
            <li class="lista" onclick="exibir_categoria('videogames')">Video-games (1)</li><br />

        </ul>
    </div>

<div class="produto">
<?php
    $sql = "select * from produtos";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($rows = $result->fetch_assoc()){ 
    
?>
     <div class="box_produto" id="<?php echo $rows["categorias"]; ?>" 
style="display: inline-block"; onclick="destaque(this)">
            <img class="imagemProduto" src="<?php echo $rows["nomeimg"]; ?>"
                alt="<?php echo $rows["descricao"]; ?>" style="width: 120px"
                onclick="destaque(this)">
            <br />
            <p class="nomeProdutos"><?php echo $rows["descricao"]; ?></p>
            <hr>
            <p class="precoAntigo"><?php echo $rows["preco"]; ?></p>
            <p class="precoAtual"><?php echo $rows["precofinal"]; ?></p><br />
        </div>
<?php    
        }
    } else {
        echo "Nenhum produto cadastrado!";
    }
?>
</div>

    <footer class="rodape">
        <p id="formasPagamento">Formas de pagamento</p>
        <img width="400px" src="./imagens/bandeira_cartoes.png" alt="Formas de pagamento">
        <p>&copy; Recode Pro</p>
    </footer>
</body>

</html>

