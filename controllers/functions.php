<?php

//Regras de Mensagens

function totalIR($value1, $value2, $value3)
{
    if (is_numeric($value1)) {
        $ir2022 = $value1;
    } else {
        $ir2022 = 0;
    }
    if (is_numeric($value2)) {
        $ir2021 = $value2;
    } else {
        $ir2021 = 0;
    }

    if (is_numeric($value3)) {
        $ir2020 = $value3;
    } else {
        $ir2020 = 0;
    }
    $totalIR = $ir2022 + $ir2021 + $ir2020;
    return $totalIR;
}

function showMessage($value1, $value2, $value3)
{
    if (is_numeric($value1)) {
        $ir2022 = $value1;
    } else {
        $ir2022 = 0;
    }
    if (is_numeric($value2)) {
        $ir2021 = $value2;
    } else {
        $ir2021 = 0;
    }

    if (is_numeric($value3)) {
        $ir2020 = $value3;
    } else {
        $ir2020 = 0;
    }

    $total = $ir2022 + $ir2021 + $ir2020;

    if ($ir2022 != 0 && $ir2021 != 0 && $ir2020 != 0) {
        $media = $total / 36;
    } elseif (($ir2022 != 0 && $ir2021 != 0 && $ir2020 == 0) ||
        ($ir2022 != 0 && $ir2021 == 0 && $ir2020 != 0) ||
        ($ir2022 == 0 && $ir2021 != 0 && $ir2020 != 0)
    ) {
        $media = $total / 24;
    } elseif (($ir2022 != 0 && $ir2021 == 0 && $ir2020 == 0) ||
        ($ir2022 == 0 && $ir2021 != 0 && $ir2020 == 0) ||
        ($ir2022 == 0 && $ir2021 == 0 && $ir2020 != 0)
    ) {
        $media = $total / 12;
    }

    if ($media <= 1200) {
        return "Renda minima para sobreviver";
    } elseif ($media > 1200 and $media <= 2500) {
        return "Da pra criar um filho";
    } elseif ($media > 2500 and $media <= 7000) {
        return "Da pra criar uma dupla de vôlei de praia já";
    } else {
        return "Filho para que se dá pra ir no bordel toda semana?";
    }
}
