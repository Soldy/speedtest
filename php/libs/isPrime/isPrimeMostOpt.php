<?php

$realPrimes = [2,3,5,7];

function isPrime($number, $realPrimes){
   for ($i = 0; $realPrimes[$i] < sqrt($number)+1; $i++ )
       if ($number % $realPrimes[$i] == 0)
           return false;
   return true;
}

for ($k =8; $k < 20000000; $k++)
   if (isPrime($k, $realPrimes))
       $realPrimes[]=$k;
echo "\n".count($realPrimes)."\n";
