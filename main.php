<?php
function square(int $n){
    $res = 0;
    for ($i = 1; $i<$n + 1; $i++){
        $res = $res + $i + $i - 1;
    }
    return $res;
}

echo square(9);

function isInArray(int $what, array $tab){
    $res = -1;
    foreach ($tab as $i => $value){
        if ($what == $value){
            $res = $i;
        }
    }
    return $res;
}

echo isInArray(7,[12,4,5,7,3]);


function fact(int $n){
    $res = 1
    for ($i = 1; $i<$n + 1; $i++){
        $res = $res * $i
    }
    return $res
}

echo "\n" ,fact(5);

function diviseurs(int $n){
    $res = 1;
    $tab = array();
    for ($i = 1; $i<$n + 1; $i++){
        if ($n % $i == 0){
            $tab[] = $i;
        }
    }
    return $tab;
}

echo "\n", diviseurs(6)

function date(int $jour, int $mois, int $annee){

}

function nbParfait(int $n){

}

function devine(int $n){

}
?>
