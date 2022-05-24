<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/app.css">

    <title>Finalização</title>
</head>
<body>
<?php setPerson();?>
    <div class="container-final">
    <form id="FormFullRegister">
        <input type="text" name="output_firstName" value= "<?php echo $_POST["firstName"]; ?>" disabled=true/>
        <input type="text" name="output_lastName" value="<?php echo $_POST["lastName"]; ?>" disabled=true/> <br>
        <input type="text" name="output_cpf" value="<?php echo $_POST["cpf"]; ?>" disabled=true/> 
        <input type="text" name="output_telefone" value="<?php echo $_POST["phone"]; ?>" disabled=true/> <br>
        <input type="text" name="output_cep" value="<?php echo $_POST["cep"]; ?>" disabled=true/> 
        <input type="text" name="output_cidade" value="<?php echo $_POST["city"]; ?>" disabled=true/> <br>
        <input type="text" name="output_bairro" value="<?php echo $_POST["district"]; ?>" disabled=true/> 
        <input type="text" name="output_endereco" value="<?php echo $_POST["address"]; ?>" disabled=true/><br>
        <input type="text" name="output_numero" value="<?php echo $_POST["number"]; ?>" disabled=true/>
        <input type="text" name="output_complemento" value="<?php echo $_POST["complement"]; ?>" disabled=true/> <br>
        <input type="text" name="output_momFirstName" value="<?php echo $_POST["momFirstName"]; ?>" disabled=true/>
        <input type="text" name="output_momLastName" value="<?php echo $_POST["momLastName"]; ?>" disabled=true/> <br>
        <input type="text" name="output_dadFirstName" value="<?php echo $_POST["dadFirstName"]; ?>" disabled=true/>
        <input type="text" name="output_dadLastName" value="<?php echo $_POST["dadLastName"]; ?>" disabled=true/> <br>
        <input type="text" name="output_ir2022" value="<?php echo $_POST["IR2022"]; ?>" disabled=true/> <br>
        <input type="text" name="output_ir2021" value="<?php echo $_POST["IR2021"]; ?>" disabled=true/> <br>
        <input type="text" name="output_ir2020" value="<?php echo $_POST["IR2020"]; ?>"  disabled=true/> <br>
        <input type="text" name="totalIR" value="<?=totalIR($_POST["IR2022"], $_POST["IR2021"],$_POST["IR2020"]) ?>"  disabled=true/> <br>
        <input type="text" name="IRMessage" value="<?= showMessage($_POST["IR2022"], $_POST["IR2021"],$_POST["IR2020"]) ?>"  disabled=true/> <br>
    </form>
    </div>

</body>
</html>