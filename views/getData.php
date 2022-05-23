<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Projeto Formulario PHP</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
        <span class="navbar-brand mb-0 h1"> Bem vindo <?php echo $_POST["firstName"] ?> </span>
    </nav>

    <div class="container">
        <form method="POST" action="end-page.php">
            <input type="text" name="firstName" placeholder="Primeiro Nome" required/> <br>
            <input type="text" name="lastName" placeholder="Ultimo Nome" required/> <br>
            <input type="text" name="cpf" placeholder="Digite seu CPF" /> <br>
            <input type="text" name="phone" placeholder="Digite seu telefone" /> <br>
            <input type="text" name="cep" placeholder="Digite seu CEP" /> <br>
            <input type="text" name="city" placeholder="Digite sua Cidade" /> <br>
            <input type="text" name="district" placeholder="Digite seu Bairro" /> <br>
            <input type="text" name="address" placeholder="Digite seu endereço" /> <br>
            <input type="text" name="number" placeholder="Digite o numero de seu endereço" /> <br>
            <input type="text" name="complement" placeholder="Digite um complemento" /> <br>
            <input type="text" name="momFirstName" placeholder="Primeiro Nome da Mãe" required/> <br>
            <input type="text" name="momLastName" placeholder="Ultimo Nome da Mae" required/> <br>
            <input type="text" name="dadFirstName" placeholder="Primeiro Nome do Pai" /> <br>
            <input type="text" name="dadLastName" placeholder="Ultimo Nome do Pai" /> <br>
            <input type="text" id= "ir2022" name="IR2022" placeholder="Renda declarada este ano" required/> <br>
            <input type="text" id= "ir2021" name="IR2021" placeholder="Renda declarada ano passado" required/> <br>
            <input type="text" id= "ir2020" name="IR2020" placeholder="Renda declarada ano retrasado" required/> <br>
            <input type="submit" value="Enviar"/> <br>
    </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>