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
		
		$this->level -= $levelMinus;
	}

	public function getLevel()
	{
		return $this->level;
	}
}

$array = [80, 20, 30];

foreach ($array as $value) {
	$mug = new Mug($value);
	$mug->remplir(50);
	$mug->vider(5);
	$result[] = $mug->getLevel();
}

var_dump($result);




