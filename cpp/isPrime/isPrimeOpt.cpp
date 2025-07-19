#include <cmath>
#include <iostream>
#include <vector>
uint32_t primes = 3;
std::vector<uint32_t> realPrimes {2,3,5};

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
    uint32_t k;
    for (k = 7; k < 200000; k = k + 2){
        if (isPrime(k)){
           realPrimes.push_back(k);
           primes++;
        }
     }
     std::cout << primes << std::endl;
}
