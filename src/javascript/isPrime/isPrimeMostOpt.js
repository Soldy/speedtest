let primes = 1;
let realPrimes = [2];

function isPrime(number){
    const limit = Math.sqrt(number)+1;
    for (let i = 0; realPrimes[i] < limit; i++)
        if (number % realPrimes[i] == 0)
            return false;
    return true;
}

for (let v = 3; v < 200000; v++)
    if (isPrime(v))
        realPrimes.push(v);

console.log(realPrimes.length.toString());

