<?php

//Regras de validação de campos

function updateRequirements() {
    $ir2022 = document.getElementById('ir2022').value;
    if ($ir2022 != null) {
      document.getElementByName('#IR2021').required == true;
    } else {
      document.getElementByName('#IR2021').required == false;
    }
  }

//Regras de Mensagens

function totalIR($value1, $value2, $value3) {
    return  $value1 + $value2 + $value3;
}

function showMessage($value1, $value2, $value3) {
    $total = $value1 + $value2 + $value3;
    $media = $total / 12;

    if ($media <= 1200){
        return "Renda minima para sobreviver";
    } elseif ($media > 1200 and $media <= 2500) {
        return "Da pra criar um filho";
    } elseif ($media > 2500 and $media <= 7000) {
        return "Da pra criar uma dupla de vôlei de praia já";
    } else {
        return "Filho para que se dá pra ir no bordel toda semana?";
    }
};