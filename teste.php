<?php
/*
 * Complete the 'miniMaxSum' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */
$arr = [7, 69, 2, 221, 8974];
function miniMaxSum($arr) {
    // Write your code here
    $arrUltimo = $arr;
    sort($arrUltimo);
    sort($arr);
    $quantidadeNumeros = count($arrUltimo);
    unset($arrUltimo[$quantidadeNumeros--]);
    $somaMini = 0;
    $somaMaxi = 0;
    for($i = 0; $i < $quantidadeNumeros ; $i++) {
        $somaMini = $somaMini + $arrUltimo[$i];
        // print $arrUltimo[$i];
    }
    $quantidadeNumeros++;
    for($i = 1; $i < $quantidadeNumeros ; $i++) {
        $somaMaxi = $somaMaxi + $arr[$i];
        // print $arr[$i];
    }
        print $somaMini ." ".$somaMaxi ;
}
// $arr_temp = rtrim(fgets(STDIN));
// $arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
miniMaxSum($arr);