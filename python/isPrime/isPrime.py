primes = 1

def isPrime(number):
    for i in range(2, number):
        if(number % i == 0):
            return False
    return True

for k in range(3, 200000):
    if isPrime(k):
        primes += 1
print (primes)
