<?php


class prime {
      private $realPrimes = [2,3,5];
      private function isPrime(int $number):bool{
           for ($i = 0; $this->realPrimes[$i] < sqrt($number)+1; $i++ )
               if ($number % $this->realPrimes[$i] == 0)
                    return false;
               return true;
     }
     public function __construct (){
         for ($k = 6 ; $k < 2000000; $k++)
             if ($this->isPrime($k))
                 $this->realPrimes[]=$k;
         echo "\n".count($this->realPrimes)."\n";
     }
}


(new prime());
