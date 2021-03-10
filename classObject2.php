<?php
class Person{
	public $firstName;
	public $lastName;
	public $gender;

	public function _construct($firstName,$lastName,$gender){
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->gender = $gender;
	}
	public function sayHello(){
		return "hello my name ". $this->firstName . " " .$this->lastName;
	}
}

$tom = new Person('tom','ben','m');
$jen = new Person('jen','ben','f');

echo $tom->sayHello();
echo "\n";

echo $jen->sayHello();
echo "\n";
