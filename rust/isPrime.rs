fn isPrime(n: u32) -> bool {
//    let limit = (n as f64).sqrt() as u32;
    let limit = n;
    for i in 2..=limit {
        if n % i == 0 {
             return false;
         }
    }
    true
}

fn main(){
   let mut primes : u32 = 0;
   for k in 2..=200000 {
        if (isPrime(k)==true){
           primes +=1;
        }
   }
   println!("{}", primes);
}

