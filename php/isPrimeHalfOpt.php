<?php

$primes = 1;

function isPrime($number){
   for ($i = 2; $i < sqrt($number)+1; $i++ )
       if ($number % $i == 0)
           return false;
   return true;
}

for ($k = 3; $k < 200000; $k++)
   if (isPrime($k))
       $primes++;
echo "\n".$primes."\n";
