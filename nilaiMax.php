<?php
function NilaiMax($c, $b, $d)
{
    if ($c >= $b && $c >= $d) {
        if ($c > $b && $c > $d) {
            echo "Nilai max dari ketiga nilai tersebut adalah = $c";
        }
    }
    if ($b >= $c && $b >= $d) {
        if ($b > $c && $b > $d) {
            echo "Nilai max dari ketiga nilai tersebut adalah = $b";
        }
    } else {

        echo "nilai max dari ketiga nilai tersebut adalah = $d";
    }
}
// Nama : Rido saputra
// NIM : 20180801379
