<?php
class Calculator {
    public function add($a, $b) {
        return $a + $b;
    }
}

$calc = new Calculator();
Here is an example of how you can define the 'multiply()' method in the 'Calculator' class: 

```
class Calculator {
    // existing code

    public function multiply($a, $b) {
        return $a * $b;
    }
}
```
After defining the method, you can call it this way: 

```
$calc = new Calculator();
$calc->multiply(2, 3);
```