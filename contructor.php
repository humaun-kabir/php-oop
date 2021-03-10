<?php
	class Employee{
		public $name;
		public $salary;

		function __construct($n="no name", $s=0){
			$this->name = $n;
			$this->salary = $s;
		}

		function info(){
			echo $this->name . "=". $this->salary;
		}
	}

	$emp = new Employee("humaun kabir",30000);
	$emp2 = new Employee();

	$emp->info();
	$emp2->info();