<?php
class User {
    public ?string $name = null;

    public function getNameLength(): int {
Replace the code in the getNameLength() method with the following:

public function getNameLength(): int {
    if($this->name === null) {
        return 0;
    }
    return strlen($this->name);
}
    }
}

$user = new User();
echo $user->getNameLength();