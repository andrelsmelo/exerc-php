<?php

$person;

function setPerson() {
    $newPerson = [
        "firstName" => $_POST["firstName"],
        "lastName" => $_POST["lastName"],
        "cpf" => $_POST["cpf"],
        "phone" => $_POST["phone"],
        "cep" => $_POST["cep"],
        "city" => $_POST["city"],
        "district" => $_POST["district"],
        "address" => $_POST["address"],
        "number" => $_POST["number"],
        "complement" => $_POST["complement"],
        "momFirstName" => $_POST["momFirstName"],
        "momLastName" =>  $_POST["momLastName"],
        "dadFirstName" => $_POST["dadFirstName"],
        "dadLastName" => $_POST["dadLastName"],
        "IR2022" => $_POST["IR2022"],
        "IR2021" => $_POST["IR2021"],
        "IR2020" => $_POST["IR2020"]
    ];

    return $person = $newPerson;
}

    function showPerson() {
        print_r("Passou");
    }