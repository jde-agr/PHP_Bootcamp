<?php

class Tyrion extends Lannister {
	public function sleepWith($person) {
		if ($person instanceof Jaime || $person instanceof Cersei)
			print "Not even if I'm drunk !" . PHP_EOL;
		if ($person instanceof Sansa)
			print "Let's do this." . PHP_EOL;
	}
}
?>