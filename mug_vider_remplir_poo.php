<?php

class Mug
{
	private $level;

	public function __construct($level)
	{
		$this->level = $level;
	}

	public function casserMug()
	{
		echo $this->level = "Mug cassée";
	}

	public function remplir($levelAdd)
	{
		$this->level += $levelAdd;
		if ($this->level > 100){
			$this->casserMug();
		} 
	}

	public function vider($levelMinus)
	{
		if (is_int($this->level)) {
			$this->level -= $levelMinus;
		}
	}

	public function getLevel()
	{
		return $this->level;
	}
}

$array = [10, 20, 30];

foreach ($array as $value) {
	$mug = new Mug($value);
	$mug->remplir(50);
	$mug->vider(5);
	$result[] = $mug->getLevel();
}

$level = 20;

while ($level != "Mug cassée") {
	$mug2 = new Mug($level);
	$mug2->remplir(25);
	$mug2->vider(10);
	$level = $mug2->getLevel();
	$result2[] = $level;
} 

var_dump($result);
var_dump($result2);




