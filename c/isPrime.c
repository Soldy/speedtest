#include <stdio.h>
typedef enum { false, true } bool;
int primes =1;

bool isPrime(int number){
   int i;
   for (i = 2; i < number; i++ ){
       if (number % i == 0){
           return false;
       }
   }
   return true;
}

int main(){
    int k;
    for (k = 3; k < 200000; k++){
        if (isPrime(k) == true){
           primes++;
        }
     }
     printf("\n%d\n", primes);
}
