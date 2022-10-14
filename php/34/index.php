<?php

$a = 3;
$b = 2;

//echo $a <=> $b;

if( ($a <=> $b) === 1 ){
    echo '$a > $b';
}elseif ( ($a <=> $b) === -1 ){
    echo '$a < $b';
}else{
    echo '$a = $b';
}