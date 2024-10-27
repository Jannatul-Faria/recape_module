<?php
//  formula:  Fn = Fn-1 + Fn-2, where n > 1.
//  fibonacci number :
$variold= 0;
$old= 1;
$new= 1;
for ($i=0; $i<100; $i++) { 
    echo $variold. " ";
    $old= $new;
    $new=$old  +  $variold;
    $variold= $old;
}

//  inisiallize

/**
 * variold= 0
 * old= 1
 * new= 1
 */

 //  1st

/**
 * variold= 1
 * old= 1
 * new= 1
 */

 //  2nd

/**
 * variold= 1
 * old= 1
 * new= 2
 */

 //  3d

/**
 * variold= 2
 * old= 2
 * new= 3
 */


  //  4th

/**
 * variold= 3
 * old= 3
 * new= 5
 */

  //  5th

/**
 * variold= 5
 * old= 5
 * new= 7
 */

   //  6th

/**
 * variold= 7
 * old= 7
 * new= 10
 */