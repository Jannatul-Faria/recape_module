<?php
$students=array("faria", "maria", "aysha", "barisha", "sumaiya");

$insart= array_push($students, "Sadia");
echo "Insert data array_push is ".$insart."\n";


$n=count($students);

for ($i=0; $i <$n ; $i++) { 
   echo $students[$i]."\n";
};


$first_one= array_shift($students);
echo "the first one is array_shift is ".$first_one."\n";

$last_one= array_pop($students);
echo "the last one is array_pop is ".$last_one."\n";


