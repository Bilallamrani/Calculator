<?php
function calculator ($number1,$number2,$op){


    if($op == '+'){
        $result = $number1 + $number2;
        return $result;

    }elseif($op == '-'){
        $result = $number1 - $number2;
        return $result;

    }elseif($op == '*'){
        $result = $number1 * $number2;
        return $result;

    }elseif($op == '/'){
        $result = $number1 / $number2;
        return $result;

    }elseif($op == '%'){
        $result = ($number1/$number2) * 100;
        return $result;

    }else{
        return "Cet opérateur n'existe pas.";
    } 
    
    $part = 50;
    $total = 100;
    $percentage = calculator($part, $total, '%');

    echo $percentage . '%';
}

?>