<?php

namespace MyNamespace;

class Cat extends Animal {
    use Logging;

    public function makeSound() {
        return "Meong!";
    }

    public function turu() {
        $this->log($this->name . " turu.");
    }
}
