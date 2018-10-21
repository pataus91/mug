<?php

class Mug
{
	private $level;

	public function __construct($level)
	{
		$this->level = $level;
	}

	// public function casserMug()
	// {
	// 	echo $this->status = "Mug cassée";
	// }

	public function remplir($levelAdd)
	{
		$this->level += $levelAdd;
		if ($this->level > 100) {
			$this->level = 100;
		}
	}

	public function vider($levelMinus)
	{
		$this->level -= $levelMinus;
		if ($this->level < 0) {
			$this->level = 0;
		}
	}

	public function getLevel()
	{
		return $this->level;
	}
}

$array = [10, 20, 30, 80];

foreach ($array as $value) {
	$mug = new Mug($value);
	$mug->remplir(50);
	$mug->vider(5);
	$result[] = $mug->getLevel();
}

$level = 20;

while ($level < 100) {
	$mug2 = new Mug($level);
	$level = $mug2->remplir(25);
	if ($level >= 100) {
		$level = 100;
		die;
	} 
	$level = $mug2->getLevel();
	$result2[] = $level;
} 

var_dump($result);
var_dump($result2);




