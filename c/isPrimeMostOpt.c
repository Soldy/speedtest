#include <stdio.h>
#include <math.h>
typedef enum { false, true } bool;
int primes =0;
int realPrimes[200000];

bool isPrime(int number){
   int i;
   float limit = sqrt(number)+1;
   for (i = 0; realPrimes[i] < limit; i++){
       if (number % realPrimes[i] == 0){
           return false;
       }
   }
   return true;
}

int main(){
    int k;
    realPrimes[0] = 2;
    primes++;
    realPrimes[1] = 3;
    primes++;
    realPrimes[2] = 5;
    primes++;
    for (k = 6; k < 2000000; k++){
        if (isPrime(k) == true){
           realPrimes[primes] = k;
           primes++;
        }
     }
     printf("\n%d\n", primes);
}
