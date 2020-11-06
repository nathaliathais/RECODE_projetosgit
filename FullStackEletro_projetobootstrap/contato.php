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

if (isset($_POST['nome']) && isset($_POST['msg'])) {
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
        <h1>Contato</h1>
        <hr>
        </div>

        <main>
            <section class="container">
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
            <div class="form-group">
           <label> Nome: </label>
            <input type="text" name="nome" style="width:500px"><br />
           <label> Mensagem:</label>
            <input type="text" name="msg" style="width:500px"><br /><br />
            </div>
            <input class="btn-danger" type="submit" name="submit" value="Enviar"><br /><br/>
        </form>

           
                    
                    
            <?php
            $sql = "select * from comentarios";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($rows = $result->fetch_assoc()) {
                    echo "Data: " . $rows['dia'] . "<br/>";
                    echo "Nome: " . $rows['nome'] . "<br />";
                    echo "Mensagem: " . $rows['msg'] . "<br />";
                    echo "<hr>";
                }
            } else {
                echo "Nenhum comentário ainda!";
            }

            ?>
            </div>
        </main>

        <footer class="rodape">
            <p id="formasPagamento">Formas de pagamento</p>
            <img width="400px" src="./imagens/bandeira_cartoes.png" alt="Formas de pagamento">
            <p>&copy; Recode Pro</p>
        </footer>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>