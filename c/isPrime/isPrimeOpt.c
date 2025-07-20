#include <stdio.h>
#include <math.h>
int primes = 3;
int realPrimes[200000];

int isPrime(int number){
   int i;
   float limit = sqrt(number)+1;
   for (i = 0; realPrimes[i] < limit; i++){
       if (number % realPrimes[i] == 0){
           return 0;
       }
   }
   return 1;
}

int main(){
    int k;
    realPrimes[0] = 2;
    realPrimes[1] = 3;
    realPrimes[2] = 5;
    for (k = 7; k < 200000; k++){
        if (isPrime(k) == 1){
           realPrimes[primes] = k;
           primes++;
        }
     }
     printf("\n%d\n", primes);
     return 0;
}
