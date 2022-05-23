<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="views/app.css">

    <title>Projeto Formulario PHP</title>
  </head>
  <body>
    <nav class="welcome-text">
<<<<<<< HEAD
        <span class="navbar-brand mb-0 h1"> Bem vindo <?php echo htmlspecialchars($_GET["cadastrante"]) ?> </span>
=======
        <span class="navbar-brand mb-0 h1"> Bem vindo <?php echo $_POST["firstName"] ?> </span>
>>>>>>> 4c30cad3131aa16bf937f8cea36dea2e78a9f30d
    </nav>

    <div class="container">
        <form id="form" method="POST" action="end-page.php">
<<<<<<< HEAD
            <input type="text" name="firstName" value="<?php echo htmlspecialchars($_GET["cadastrante"])?>" placeholder="Primeiro Nome" required/>
            <input type="text" name="lastName" placeholder="Ultimo Nome" required/>
            <br>
            <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF" />
            <input type="text" id="phone" name="phone" placeholder="Digite seu telefone"/>
            <br>
            <input id="cep" type="text"  name="cep" placeholder="Digite seu CEP" />
            <input id="cidade" type="text"  name="city" placeholder="Digite sua Cidade" />
            <br>
            <input id="bairro" type="text"  name="district" placeholder="Digite seu Bairro" />
            <input id="logradouro" type="text"  name="address" placeholder="Digite seu endereço" />
            <br>
            <input type="text" name="number" placeholder="Digite o numero de seu endereço" />
            <input type="text" name="complement" placeholder="Digite um complemento" />
            <br>
            <input type="text" name="momFirstName" placeholder="Primeiro Nome da Mãe" required/>
            <input type="text" name="momLastName" placeholder="Ultimo Nome da Mae" required/>
            <br>
            <input type="text" name="dadFirstName" placeholder="Primeiro Nome do Pai" />
            <input type="text" name="dadLastName" placeholder="Ultimo Nome do Pai" />
            <br>
            <input type="text" id= "ir2022" name="IR2022" placeholder="Renda declarada este ano"/>
            <br>
            <input type="text" id= "ir2021" name="IR2021" placeholder="Renda declarada ano passado"/>
            <br>
            <input type="text" id= "ir2020" name="IR2020" placeholder="Renda declarada ano retrasado"/>
            <br>
=======
            <input type="text" name="firstName" placeholder="Primeiro Nome" required/>
            <input type="text" name="lastName" placeholder="Ultimo Nome" required/> <br>
            <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF" />
            <input type="text" id="phone" name="phone" placeholder="Digite seu telefone" /> <br>
            <input id="cep" type="text"  name="cep" placeholder="Digite seu CEP" />
            <input id="cidade" type="text"  name="city" placeholder="Digite sua Cidade" /> <br>
            <input id="bairro" type="text"  name="district" placeholder="Digite seu Bairro" />
            <input id="logradouro" type="text"  name="address" placeholder="Digite seu endereço" /> <br>
            <input type="text" name="number" placeholder="Digite o numero de seu endereço" />
            <input type="text" name="complement" placeholder="Digite um complemento" /> <br>
            <input type="text" name="momFirstName" placeholder="Primeiro Nome da Mãe" required/>
            <input type="text" name="momLastName" placeholder="Ultimo Nome da Mae" required/> <br>
            <input type="text" name="dadFirstName" placeholder="Primeiro Nome do Pai" />
            <input type="text" name="dadLastName" placeholder="Ultimo Nome do Pai" /> <br>
            <input type="text" id= "ir2022" name="IR2022" placeholder="Renda declarada este ano" required/> <br>
            <input type="text" id= "ir2021" name="IR2021" placeholder="Renda declarada ano passado" required/> <br>
            <input type="text" id= "ir2020" name="IR2020" placeholder="Renda declarada ano retrasado" required/> <br>
>>>>>>> 4c30cad3131aa16bf937f8cea36dea2e78a9f30d
            <div class="btn-box">
              <button type="submit" id="submit"> Enviar </button>
            </div>
    </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

    <script type="text/javascript" >
    $("#phone").mask("(00) 0000-0000");
    $("#cep").mask("00.000-000");
    $("#cpf").mask("000.000.000-00");
    </script>

  <script type="text/javascript">
    $("#cep").focusout(function(){
      $.ajax({
        url: 'https://viacep.com.br/ws/'+$(this).val().replace(/\D/g, '')+'/json/',  
        dataType: 'json',
        success: function(resposta){
          $("#logradouro").val(resposta.logradouro);
          $("#bairro").val(resposta.bairro);
          $("#cidade").val(resposta.localidade);
          $("#numero").focus();
        }
      });
    });
    </script>
</body>
</html>