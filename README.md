# PHP Recursive Function Stack Overflow

This repository demonstrates a potential stack overflow error in a PHP recursive function that processes nested arrays.  The `processData` function recursively iterates through nested arrays and performs operations on individual elements.  However, if the array structure is too deep or contains a large number of elements, it can exceed the PHP call stack limit and cause a crash.

The solution demonstrates how to mitigate the risk by implementing an iterative approach using a stack or queue.