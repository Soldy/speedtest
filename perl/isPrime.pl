$primes = 0;

sub isPrime{
   my $number = @_[0];
   for ($i = 2; $i < $number; $i++ ){
       my $rest = $number % $i;
       if ($rest eq 0){
           return 0;
       }
   }
   return 1;
}


for ($k = 2; $k < 200000; $k++){
    if (isPrime($k) eq 1){
       $primes++;

    }
}
print " $primes \n";
