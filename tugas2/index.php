<?php

require_once 'src/MyNamespace/Logging.php';
require_once 'src/MyNamespace/Animal.php';
require_once 'src/MyNamespace/Cat.php';
require_once 'src/MyNamespace/Dog.php';

use MyNamespace\Cat;
use MyNamespace\Dog;

$cat = new Cat("Oyen", 3);
$dog = new Dog("Asu", 2);

echo $cat->makeSound() . "\n";
$cat->turu();

echo $dog->makeSound() . "\n";
$dog->gukguk();
