import math
primes = 1
realPrimes = [2];

def isPrime(number):
    for i in realPrimes:
        if(number % i == 0):
            return False
    return True

for k in range(3, 200000):
    if isPrime(k):
        realPrimes.append(k)

print (len(realPrimes))
