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

function averageMonthIr($value1, $value2, $value3){

    $arrayAllValues = array(
        0 => $value1,
        1 => $value2,
        2 => $value3
    );
    $count = 0;
    $result = 0;

foreach ($arrayAllValues as $key => $value) {
    if($value>0){
        $count++;
   }else{
       unset($arrayAllValues[$key]);
       $arrayAllValues = array_values($arrayAllValues);
   }
}

if($count == 3){
   $result = ($value1 + $value2 + $value3) /36;
} elseif($count == 2){
   $result = ($arrayAllValues[0]+$arrayAllValues[1])/24;
} elseif($count == 1){
   $result = $arrayAllValues[0]/12;
}
return $result;
};


function showMessage($result)
{
    if ($result <= 1200) {
        return "Renda minima para sobreviver";
    } elseif ($result > 1200 and $result <= 2500) {
        return "Da pra criar um filho";
    } elseif ($result > 2500 and $result <= 7000) {
        return "Da pra criar uma dupla de vôlei de praia já";
    } else {
        return "Filho para que se dá pra ir no bordel toda semana?";
    }
}
