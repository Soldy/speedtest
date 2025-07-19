
#include <iostream>
uint32_t primes =1;

bool isPrime(uint32_t number){
   uint32_t i;
   for (i = 2; i < number; i++ ){
       if (number % i == 0){
           return false;
       }
   }
   return true;
}

int main(){
    uint32_t k;
    for (k = 3; k < 200000; k++){
        if (isPrime(k)){
           primes++;
        }
     }
     std::cout << primes << std::endl;
}
