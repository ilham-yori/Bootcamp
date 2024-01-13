<?php

for( $i=1; $i<=100; $i++ ){
    if($i % 3 == 0){
        if($i % 5 == 0){
            echo number_format(luasPersegiPanjang($i),2),"\r\n";
        }else{
            echo number_format(luasLingkakran($i),2),"\r\n";
        }
    }else if($i % 5 == 0){
        echo number_format(kelilingLingkaran($i),2),"\r\n";
    }else{
        echo number_format($i,2),"\r\n";
    }

}

function luasLingkakran(Int $jari) {
    $phi = 3.14;
    $r = $jari/3;
    return $phi*$r*$r;
}

function kelilingLingkaran(Int $jari) {
    $phi = 3.14;
    $r = $jari/5;
    return 2*$phi*$r;
}

function luasPersegiPanjang(Int $value){
    $panjang = $value/3;
    $lebar = $value/5;
    return $panjang * $lebar;
}