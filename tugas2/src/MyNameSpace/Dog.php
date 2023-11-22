<?php

namespace MyNamespace;

use MyNamespace\Animal;

class Dog extends Animal {
    use Logging;

    public function makeSound() {
        return "Guk!";
    }

    public function gukguk() {
        $this->log($this->name . " gukguk.");
    }
}
