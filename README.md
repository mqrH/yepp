# yepp
## Я починаю курс PHP в robot_dreams і вже вмію використовувати Git
<?php

class Animal {
    function say()
    {
        echo 'Hello, I am an animal' . PHP_EOL;
    }

    function eat()
    {
        echo 'I can eat fish' . PHP_EOL;
    }
}


class Cat extends Animal
{
    function eat()
    {
        echo 'I am a cat' . PHP_EOL;
    }
}


class Homecat extends Cat{}


$animal = new Animal();
$cat = new Cat();
$homecat = new Homecat();


