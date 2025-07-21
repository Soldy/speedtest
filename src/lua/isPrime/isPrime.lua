primes = 0


function isPrime(number)
    for i = 2, number-1, 1 do
        if (number % i) == 0 then
           return false
        end
    end
    return true
end


for v = 3, 2000000, 1 do
    if (isPrime(v) == true) then
        primes = primes + 1
    end
end
print(primes)
