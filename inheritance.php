<?php
class Employee extends Person{
	public $jobTitle;

	public function _construct($jobTitle,$firstName,$lastName,$gender){
		$this->jobTitle = $jobTitle;

		parent::_construct($firstName,$lastName,$gender);
	}

	public function getJobTitle(){
		return $this->getJobTitle;
	}

}
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
		return "MY name is". $this->firstName . " " . $this->lastName;
	}

	public function getGender(){
		return $this->gender;
	}
}

$jane = new Employee('Backend Developer','jane','fisher');

echo $jane->getJobTitle();
echo "\n";

echo $jane->sayHello();

echo "\n";