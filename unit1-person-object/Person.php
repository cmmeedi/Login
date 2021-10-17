<?php

class Person {
    
    private $name;
    private $age;
    private $address;
    private $email;
    private $phone;
    private $username;
    
    //Here is the Constructor which creates a datatype called "Person" and is
    //filled with the datatypes all associated and required for the "Person"
    //data type
    public function __construct($n, $a, $addy, $em, $tele){
        $this->name = $n;
        $this->age = $a;
        $this->address = $addy;
        $this->email = $em;
        $this->phone = $tele;
        echo "Hello.  I am a new person.  My name is " . $n . " I am " . $a . " years old" . " My Address is "
            . $addy . " and my Email address is " . $em . " if you would like to call me you can reach me at" . 
         $tele . "<br>";
        $this->password = "qwerty";
        $this->username = "bob";
    }
    
    //A basic function which outputs a message to let the user know who
    //is walking
    public function walk(){
        echo $this->name . " is walking...<br>";
    }
    
    //A basic function which outputs a message to let the user know who
    //is the one greeting
    public function greeting() {
        echo $this->name . ":" . " Hello.<br>";
    }
    
    //A basic function which outputs a message to let the user know who
    //is making a formal greeting
    public function formalGreeting(){
        echo $this->name . ":" . " Oh well Top of the Mornin to ya'.<br>";
    }
    
    //A basic function which outputs a message to let the user know who
    //is making a spanish greeting
    public function spanishGreeting(){
        echo $this->name . ":" . " Ola, Como estas?.<br>";
    }
    
    //This is the login function which compares the users password with the
    //password they will eventually be typing into the required fields
    public function login($a, $b){
        if($a == $this->username && $b == $this->password){
            echo "SUCCESSSSSSSS!!!<br>";
        }
        else{
            echo "Wuchyou tryna do?<br>";
        }
    }
    
}



?>