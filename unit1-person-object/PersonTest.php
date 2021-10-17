<?php

require_once 'Person.php';

$person1 = new Person("Mark");

$person2 = new Person("Samuel");

$person3 = new Person("Chaplin");

$person4 = new Person("Julio");


$person1->walk();

$person2->walk();

$person1->greeting();

$person3->formalGreeting();

$person4->spanishGreeting();



$person2->login("Norman", "password1");
$person2->login("bob", "qwerty");