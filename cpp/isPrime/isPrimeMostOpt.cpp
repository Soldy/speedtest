#include <cmath>
#include <iostream>
#include <vector>
uint32_t primes =0;
std::vector<uint32_t> realPrimes;

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
    realPrimes.push_back(2);
    primes++;
    realPrimes.push_back(3);
    primes++;
    realPrimes.push_back(5);
    primes++;
    for (k = 6; k < 200000; k++){
        if (isPrime(k)){
           realPrimes.push_back(k);
           primes++;
        }
     }
     std::cout << primes << std::endl;
}
