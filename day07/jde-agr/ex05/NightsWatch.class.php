<?php

class NightsWatch {
	private $arr_war = array();
	public function recruit($warrior) {
		$this->$arr_war[] = $warrior;
	}
	public function fight() {
		foreach ($this->$arr_war as $warrior) {
			if (method_exists(get_class($warrior), 'fight'))
				$warrior->fight();
		}
	}
}
?>