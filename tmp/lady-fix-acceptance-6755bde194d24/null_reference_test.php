<?php
class User {
    public ?string $name = null;

    public function getNameLength(): int {
Here's how you can modify the getNameLength method:

public function getNameLength(): int {
    return is_null($this->name) ? 0 : strlen($this->name);
}
    }
}

$user = new User();
echo $user->getNameLength();