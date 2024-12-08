<?php
function divide($a, $b) {
Here is a modified version of your 'divide' function that includes a check for division by zero: 

function divide($a, $b) {
    if($b == 0) {
        throw new Exception('Division by zero is not allowed');
    }
    return $a / $b;
}

You can replace the throw statement with return false; or return null; depending on your needs. Be sure to handle this return value properly in the calling code.
}

echo divide(10, 0);