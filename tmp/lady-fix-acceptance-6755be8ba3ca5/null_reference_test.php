<?php
class User {
    public ?string $name = null;

    public function getNameLength(): int {
Replace the 'getNameLength' function in the User class with the following code:

public function getNameLength(): int {
    if(is_null($this->name)) {
        return 0;
    } else {
        return strlen($this->name);
    }
}
    }
}

$user = new User();
echo $user->getNameLength();