<?php
$homepage = file_get_contents('uzd_2_source_code.php');
echo $homepage;
?>

<?php

$X  = array();
$Y = array();
$Z = array();

$Numbers = array(1,2,4,7,1,6,2,8);

rsort($Numbers);

function check_if_empty($X,$Y,$Z,$k,$Numbers)
{
    if (sizeof($X) || sizeof($Y) || sizeof($Z) == 0) {
        if (empty($X)) {
            array_push($X, $Numbers[$k]);
            $k++;
        } elseif (empty($Y)) {
            array_push($Y, $Numbers[$k]);
            $k++;
        } else {
            array_push($Z, $Numbers[$k]);
            $k++;
        }
    }
    return $k;
}

function find_min($X,$Y,$Z,$Numbers) {

    for ($k = 0; $k <= sizeof($Numbers)-1; $k++) {

        check_if_empty( $X,$Y,$Z,$k,$Numbers);

        if((array_sum($X) == array_sum($Y)) && (array_sum($Y) == array_sum($Z)))
        {
            array_push($Z, $Numbers[$k]);
        }
        elseif ((array_sum($X) <= array_sum($Y)) && (array_sum($X) <= array_sum($Z))) {
            array_push($X, $Numbers[$k]);
        }
        elseif ((array_sum($Y) <= array_sum($X)) && (array_sum($Y) <= array_sum($Z))) {
            array_push($Y, $Numbers[$k]);
        }
        else {
            array_push($Z, $Numbers[$k]);
        }
    }
    draw_result($X,$Y,$Z);
}

function draw_result($X,$Y,$Z)
{
    $endline = "\n";
    $eqSign = " = ";
    $Xstring= join(',', $X);
    $Ystring= join(',', $Y);
    $Zstring= join(',', $Z);

    echo "Rezultatai:\n";

    echo $Xstring.$eqSign.array_sum($X).$endline;
    echo $Ystring.$eqSign.array_sum($Y).$endline;
    echo $Zstring.$eqSign.array_sum($Z).$endline;
}

find_min($X,$Y,$Z,$Numbers);

?>