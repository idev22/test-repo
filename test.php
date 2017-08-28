<?php

class A {
	private static $s = 'sss';
	
	public function get_s() {
		return $str . self::$s;
	}
	
	public function set_s($s) {
		self::$s = $s;
	}
}

var_dump(A::get_s());

?>