let primes = 0;

function isPrime(number){
    for (let i = 2; i < number; i++)
        if (number % i == 0)
            return false;
    return true;
}
for (let v = 2; v < 200000; v++)
    if (isPrime(v))
       primes++;

console.log(primes.toString()+"\n");

