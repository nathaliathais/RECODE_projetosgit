<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nossas lojas</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <!--link css-->
</head>

<body>
    <!-- Início do menu -->
    <?php

        include('menu.html');
    ?>
    <!-- Fim do menu -->
    <h2>Nossas lojas</h2>
    <hr>
    <main>
        <section class="endereçoLojas">
            <div class="blocoLojas">
                <h3>Rio de Janeiro</h3>
                <p>Avenida Presidente Vargas, 5000</p>
                <p>10 &ordm; andar</p>
                <p>Centro</p>
                <p>(21) 3333-3333</p>
            </div>
            <div class="blocoLojas">
                <h3>São Paulo</h3>
                <p>Avenida Paulista, 985</p>
                <p>3 &ordm; andar</p>
                <p>Jardins</p>
                <p>(11) 4444-4444</p>
            </div>
            <div class="blocoLojas">
                <h3>Santa Catarina</h3>
                <p>Rua Major &Aacute;vila, 370</p>
                <p>Vila Mariana</p>
                <p>(47) 5555-5555</p>
            </div>

        </section>
    </main>
    <footer class="rodape">
        <p id="formasPagamento">Formas de pagamento</p>
        <img width="400px" src="./imagens/bandeira_cartoes.png" alt="Formas de pagamento">
        <p>&copy; Recode Pro</p>
    </footer>
</body>

</html>