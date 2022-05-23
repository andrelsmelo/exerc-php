<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form id="FormFullRegister">
    <label><small>Primeiro Nome</small><br> 
    <input type="text" name="output_firstName" value= "<?php echo $_POST["firstName"]; ?>" disabled=true/> <br>
    <label><small>Ultimo Nome</small><br>
    <input type="text" name="output_lastName" value="<?php echo $_POST["lastName"]; ?>" disabled=true/> <br>
    <label><small>CPF</small><br>
    <input type="text" name="output_cpf" value="<?php echo $_POST["cpf"]; ?>" disabled=true/> <br>
    <label><small>Telefone</small><br>
    <input type="text" name="output_telefone" value="<?php echo $_POST["phone"]; ?>" disabled=true/> <br>
    <label><small>CEP</small><br>
    <input type="text" name="output_cep" value="<?php echo $_POST["cep"]; ?>" disabled=true/> <br>
    <label><small>Cidade</small><br>
    <input type="text" name="output_cidade" value="<?php echo $_POST["city"]; ?>" disabled=true/> <br>
    <label><small>Bairro</small><br>
    <input type="text" name="output_bairro" value="<?php echo $_POST["district"]; ?>" disabled=true/> <br>
    <label><small>Endereço</small><br>
    <input type="text" name="output_endereco" value="<?php echo $_POST["address"]; ?>" disabled=true/><br>
    <label><small>Numero</small><br>
    <input type="text" name="output_numero" value="<?php echo $_POST["number"]; ?>" disabled=true/> <br>
    <label><small>Complemento</small><br>
    <input type="text" name="output_complemento" value="<?php echo $_POST["complement"]; ?>" disabled=true/> <br>
    <label><small>Primeiro Nome da Mãe</small><br>
    <input type="text" name="output_momFirstName" value="<?php echo $_POST["momFirstName"]; ?>" disabled=true/> <br>
    <label><small>Ultimo Nome da Mãe</small><br>
    <input type="text" name="output_momLastName" value="<?php echo $_POST["momLastName"]; ?>" disabled=true/> <br>
    <label><small>Primeiro Nome do Pai</small><br>
    <input type="text" name="output_dadFirstName" value="<?php echo $_POST["dadFirstName"]; ?>" disabled=true/> <br>
    <label><small>Ultimo Nome do Pai</small><br>
    <input type="text" name="output_dadLastName" value="<?php echo $_POST["dadLastName"]; ?>" disabled=true/> <br>
    <label><small>IR 2022</small><br>
    <input type="text" name="output_ir_incoming[]" value="<?php echo $_POST["IR2022"]; ?>" disabled=true/> <br>
    <label><small>IR 2021</small><br>
    <input type="text" name="output_ir_incoming[]" value="<?php echo $_POST["IR2021"]; ?>" disabled=true/> <br>
    <label><small>IR 2020</small><br>
    <input type="text" name="output_ir_incoming[]" value="<?php echo $_POST["IR2020"]; ?>"  disabled=true/> <br>
    <label><small>Total IR</small><br>
    <input type="text" name="totalIR" value="<?=totalIR($_POST["IR2022"], $_POST["IR2021"],$_POST["IR2020"]) ?>"  disabled=true/> <br>
    <label><small>Mensagem</small><br>
    <input type="text" name="IRMessage" value="<?= showMessage($_POST["IR2022"], $_POST["IR2021"],$_POST["IR2020"]) ?>"  disabled=true/> <br>
    </div>
    </form>
</body>
</html>