<?php

abstract class House {
	public function introduce() {
		return vprintf("House %s of %s : \"%s\"%s", array($this->getHouseName(), $this->getHouseSeat(), $this->getHouseMotto(), PHP_EOL));
	}

	abstract function getHouseName();
	abstract function getHouseMotto();
	abstract function getHouseSeat();
}
?>