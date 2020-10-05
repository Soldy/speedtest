
let primes = 0;
let realPrimes = [2];

function isPrime(number){
    for (let i = 0; realPrimes[i] < Math.sqrt(number)+1; i++)
        if (number % realPrimes[i] == 0)
            return false;
    return true;
}
for (let v = 3; v < 2000000; v++)
    if (isPrime(v))
        realPrimes.push(v);

console.log(realPrimes.length.toString()+"\n");

