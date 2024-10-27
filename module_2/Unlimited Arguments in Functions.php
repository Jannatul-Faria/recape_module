<?php

function sum(int $s,int $n,int $m):int{
    return $s* $n* $m;
}
echo sum(5,6,3,5,7)."\n";

//  unlimited arguments :
function test(int ...$n):int{
    $results= 0;
    for ($i=0; $i <count($n) ; $i++) { 
       $results += $n[0];
     
    }
    return $results;
}
echo test(20,10,30)."\n";