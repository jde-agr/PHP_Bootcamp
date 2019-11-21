<?php

class Targaryen {
	public function resistsFire() {
		return false;
	}
	public function getBurned() {
		$ans = $this->resistsFire();
		if ($ans)
			return "emerges naked but unharmed";
		else return "burns alive";
	}
}
?>