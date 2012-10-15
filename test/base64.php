<?php

require 'base64.php';

class Tests_Base64 extends PHPUnit_Framework_TestCase {
	public function testBase64String() {
		$this->assertEquals("This is a test, only a test", _base64_decode("VGhpcyBpcyBhIHRlc3QsIG9ubHkgYSB0ZXN0"));
	}
}

?>