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

    if(isset($_POST['nome']) && isset($_POST['msg'])){
        $nome = $_POST['nome'];
        $msg = $_POST['msg'];

        $sql = "insert into comentarios (nome, msg) values ('$nome','$msg')";
        $result = $conn->query($sql);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <!--link css-->
</head>

<body>
    <!-- Início do menu -->
    <?php

        include('menu.html');
    ?>
    <!-- Fim do menu -->
    <h2>Contato</h2>
    <hr>

    <main>
        <section class="estiloContato">
            <div class="blocoContato">
                <img class="iconContato" src="imagens/icon_email.png" alt="ícone e-mail">
                <p>contato@fullstackeletro.com</p>
            </div>
            <div class="blocoContato">
                <img class="iconContato" src="imagens/icon_whatsapp.png" alt="ícone whatsapp">
                <p>(11) 9999-9999</p>
            </div>
        </section>

        <form method="post" action="">
            Nome:<br />
            <input type="text" name="nome" style="width:500px"><br />
            Mensagem:<br />
            <input type="text" name="msg" style="width:500px"><br /><br />
            <input type="submit" name="submit" value="Enviar"><br /><br/>
        </form>

        <?php
    $sql = "select * from comentarios";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($rows = $result->fetch_assoc()){ 
            echo "Data: ". $rows['dia']. "<br/>";
            echo "Nome: ". $rows['nome']. "<br />";
            echo "Mensagem: ". $rows['msg']. "<br />";
            echo "<hr>";
        }
    } else {
        echo "Nenhum comentário ainda!";
    }
        
?>

    </main>

    <footer class="rodape">
        <p id="formasPagamento">Formas de pagamento</p>
        <img width="400px" src="./imagens/bandeira_cartoes.png" alt="Formas de pagamento">
        <p>&copy; Recode Pro</p>
    </footer>
</body>

</html>