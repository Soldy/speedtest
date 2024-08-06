# speedtest



This speed test focuses on three main areas:

 1. Compiler optimization

 1. Memory management/usage

 1. CPU optimization


The test consists of five types of tests:
 1. Non-optimized prime number calculation, which is relatively easy to optimize at the compiler level.

 1. Blind counting for. This is the easiest to optimize, and that's why we are testing it.

 1. Different sorting methods. This is useful because some learning modules is mostly based on matrix sorting. If you have hardware limitations, this is the only way to improve performance. It doesn't change the most effective sorting method, but it's perfect for the test. Most languages have a built-in sort function. This is a good way to compare it with a handbuilt function.

 1. Threads. The performance of developer environments is significantly different when threads are used. (plus Atomix)

 1. Async. Async is not a thread. It's a situation when the code runs asynchronously. In short, not all async tasks run in a separate thread. For that reason, it is separated from the thread test.




