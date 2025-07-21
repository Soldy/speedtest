let primes = 1;

function isPrime(number){
    for (let i = 2; i < Math.sqrt(number)+1; i++)
        if (number % i == 0)
            return false;
    return true;
}

for (let v =3; v < 200000; v++)
    if (isPrime(v))
       primes++;

console.log(primes.toString()+"\n");

