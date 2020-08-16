<?php

$primes = 0;

function isPrime($number){
   for ($i = 2; $i < $number; $i++ )
       if ($number % $i == 0)
           return false;
   return true;
}

for ($k = 0; $k < 200000; $k++)
   if (isPrime($k))
       $primes++;
echo "\n".$primes."\n";
