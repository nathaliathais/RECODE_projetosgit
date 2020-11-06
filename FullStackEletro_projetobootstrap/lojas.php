<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nossas lojas</title>
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
        <h1>Nossas lojas</h1>
        <hr>
        </div>



        <main>
        <div class="tabelaLojas table-responsive text-center ">
      
                <table class="table-borderless">
                    <tbody>
                        <tr>
                            <th scope="col-lg">Rio de Janeiro</th>
                            <th scope="col-lg">São Paulo</th>
                            <th scope="col-lg">Santa Catarina</th>
                        </tr>
                        <tr>
                            <td>Avenida Presidente Vargas, 5000</td>
                            <td>Avenida Paulista, 985</td>
                            <td>Rua Major &Aacute;vila, 370</td>
                           
                        </tr>
                        <tr>
                            <td>10 &ordm; andar</td>
                            <td>3 &ordm; andar</td>
                            <td>Vila Mariana</td>
                            
                        </tr>
                        <tr>
                            <td>Centro</td>
                            <td>Jardins</td> 
                            <td>(47) 5555-5555</td>
                        </tr>
                        <tr>
                            <td>(21) 3333-3333</td>
                            <td>(11) 4444-4444</td>
                         
                            
                        </tr>

                </table>
            
         
          </div>
        </main>

        <footer class="rodape">
            <div class="container-fluid text-center">
                <p id="formasPagamento">Formas de pagamento</p>
                <img width="400px" src="./imagens/bandeira_cartoes.png" alt="Formas de pagamento">
                <p>&copy; Recode Pro</p>
            </div>
        </footer>




        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>        
</body>

</html>