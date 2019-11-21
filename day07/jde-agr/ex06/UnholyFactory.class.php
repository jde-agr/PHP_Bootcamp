<?php

class UnholyFactory
{
	private $arr_war = array();
	public function absorb($warrior) {
		if (get_parent_class($warrior)) {
			if (isset($this->arr_war[$warrior->getName()])) {
				print("(Factory already absorbed a fighter of type " . $warrior->getName() . ")" . PHP_EOL);
			} else {
				print("(Factory absorbed a fighter of type " . $warrior->getName() . ")" . PHP_EOL);
				$this->arr_war[$warrior->getName()] = $warrior;
			}
		} else {
			print("(Factory can't absorb this, it's not a fighter)" . PHP_EOL);
		}
	}
	public function fabricate($warrior) {
		if (array_key_exists($warrior, $this->arr_war)) {
			print("(Factory fabricates a fighter of type " . $warrior . ")" . PHP_EOL);
			return clone $this->arr_war[$warrior];
		}
		print("(Factory hasn't absorbed any fighter of type " . $warrior . ")" . PHP_EOL);
		return null;
	}
}
?>