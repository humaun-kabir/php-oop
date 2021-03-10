<?php
	class Teacher{
		public $name;
		public $salary;

		function __construct($n,$s){
			$this->name = $n;
			$this->salary = $s;
		}

		function info(){
			echo "<h3>Teachers info :</h3>";
			echo "name : ".$this->name."<br>";
			echo "salary :".$this->salary. "<br>";
		}
	}

	class Headmaster extends Teacher{
		public $extra = 5000;
		function info(){
			$this->extra += $this->salary;

			echo "<h3>Headmaster info :</h3>";
			echo "name : ".$this->name."<br>";
			echo "salary :".$this->extra. "<br>";
		}
	}

	$t = new Teacher("humaun kabir",20000);
	$h = new Headmaster("leon kabir",25000);
	$t->info();
	$h->info();

