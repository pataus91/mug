<?php

class Mug
{
	private $level = 0;
	private $broken = false;

	public function remplir($levelAdd)
	{
		if ($this->isNotBroken()) {
			$this->level += $levelAdd;
			if ($this->level > 100) {
				$this->level = 100;
			}
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


	public function casser()
	{
		$this->level = 0;
		$this->broken = true;
	}

	public function isNotBroken()
	{
		return !$this->broken;
	}
}

function stopScriptIfMugLevelIsWrong(Mug $mug, $expectedLevel) {
	if($mug->getLevel() != $expectedLevel) {
		echo "Error expected: " . $expectedLevel . "\nCurrent level: " . $mug->getLevel() . "\n";
		die;
	}
}

$mug = new Mug();
stopScriptIfMugLevelIsWrong($mug, 0);

$mug->remplir(40);
stopScriptIfMugLevelIsWrong($mug, 40);

$mug->remplir(35);
stopScriptIfMugLevelIsWrong($mug, 75);

$mug->vider(20);
stopScriptIfMugLevelIsWrong($mug, 55);

$mug->vider(53);
stopScriptIfMugLevelIsWrong($mug, 2);

$mug->casser();
stopScriptIfMugLevelIsWrong($mug, 0);

$mug->remplir(30);
stopScriptIfMugLevelIsWrong($mug, 0);










