<?php
//  1. divisible by 4 ok
//  2. divisible by 100 ok
//  2. divisible by 400 na holew chole

for ($y=2000; $y<=2050; $y++) { 
    if ($y % 4 == 0 && ( $y % 100 !=0 || $y % 400 == 0) ) {
        echo "This $y year is leap year! \n";
        }else{
        echo "This $y year is normal year! \n";
    }
}


