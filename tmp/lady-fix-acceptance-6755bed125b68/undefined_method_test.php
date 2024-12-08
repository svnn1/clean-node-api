<?php
class Calculator {
    public function add($a, $b) {
        return $a + $b;
    }
}

$calc = new Calculator();
Add the following method to the 'Calculator' class: 

public function multiply($a, $b) {
    return $a * $b;
}