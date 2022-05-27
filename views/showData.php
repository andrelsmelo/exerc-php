<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/profile.css">
    <title>Finalização</title>
</head>

<body>
    <div class="container">
        <div class="main-body">
            <div class="row gutters-sm">
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Nome Completo</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo $_POST["firstName"] . " " . $_POST["lastName"]; ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">CPF</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo $_POST["cpf"]; ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Telefone</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo $_POST["phone"]; ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">CEP</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo $_POST["cep"]; ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Endereço</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo $_POST["address"] . " " . $_POST["number"] . ", " . $_POST["complement"] . " " . $_POST["city"] . " - " . $_POST["district"]; ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Nome da Mãe</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo $_POST["momFirstName"] . " " . $_POST["momLastName"]; ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Nome do Pai</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo $_POST["dadFirstName"] . " " . $_POST["dadLastName"]; ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Ir Declarado</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <span> Ir 2022 &rArr; <?= $_POST["IR2022"] ?> </span>
                                    <br>
                                    <span> Ir 2021 &rArr; <?= $_POST["IR2021"] ?> </span>
                                    <br>
                                    <span> Ir 2020 &rArr; <?= $_POST["IR2020"] ?> </span>
                                    <br>
                                    <br>
                                    <span> Total IR declarado &rArr;
                                        <?= totalIR($_POST["IR2022"], $_POST["IR2021"], $_POST["IR2020"]) ?></span>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0"> Mensagem</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?= showMessage(averageMonthIr($_POST["IR2022"], $_POST["IR2021"], $_POST["IR2020"])) ?>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>