<?php

//Regras de Mensagens

function totalIR($ir2022, $ir2021, $ir2020) {
    $totalIR = $ir2022 + $ir2021 + $ir2020;
    return $totalIR;
}

function showMessage($ir2022, $ir2021, $ir2020) {
    $total = $ir2022 + $ir2021 + $ir2020;
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