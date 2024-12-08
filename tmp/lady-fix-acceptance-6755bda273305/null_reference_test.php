<?php
class User {
    public ?string $name = null;

    public function getNameLength(): int {
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