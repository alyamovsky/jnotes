<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function clean($input)
{
    $type = gettype($input);
    var_dump($type);
    $filter = ($type == 'int') ? 'FILTER_SANITIZE_NUMBER_INT' : 'FILTER_SANITIZE_SPECIAL_CHARS';
    var_dump($_POST);

    $input = stripcslashes($input);
    $output = filter_input(INPUT_POST, $input, $filter);
    return $output;
}

function jTime($input)
{
    $ret = date('m Y', $input);

    $date = explode(" ", $ret);
    switch ($date[0]) {
        case 1: $m = 'Январь';
            break;
        case 2: $m = 'Февраль';
            break;
        case 3: $m = 'Март';
            break;
        case 4: $m = 'Апрель';
            break;
        case 5: $m = 'Май';
            break;
        case 6: $m = 'Июнь';
            break;
        case 7: $m = 'Июль';
            break;
        case 8: $m = 'Август';
            break;
        case 9: $m = 'Сентябрь';
            break;
        case 10: $m = 'Октябрь';
            break;
        case 11: $m = 'Ноябрь';
            break;
        case 12: $m = 'Декабрь';
            break;
    }
    echo $m . '&nbsp;' . $date[1];
}

function jMonth($input)
{
    $ret = date('m', $input);
    return $ret;
}

function jYear($input)
{
    $ret = date('Y', $input);
    return $ret;
}
