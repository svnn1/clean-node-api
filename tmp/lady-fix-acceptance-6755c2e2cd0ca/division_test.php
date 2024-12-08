<?php
function divide($a, $b) {
Here is a revised version of your code that includes a check for division by zero:

<?php
function divide($a, $b) {
    if ($b == 0) {
        throw new Exception('Division by zero not allowed');
    }
    return $a / $b;
}

echo divide(10, 0);
}

echo divide(10, 0);