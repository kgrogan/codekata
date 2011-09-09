<?php
/**
 * @package     StringCalculator
 * @license     http://www.opensource.org/licenses/mit-license.html
 * @copyright   Full license/copyright information can be found in the LICENSE file distributed with this source code.
 */

namespace StringCalculator;
      use PHPUnit_Framework_TestCase as TestCase;

/**
 * @package     StringCalculator
 * @license     http://www.opensource.org/licenses/mit-license.html
 * @copyright   Full license/copyright information can be found in the LICENSE file distributed with this source code.
 */
class StringCalculatorTest extends TestCase {
	public function testStringSucceed() {
		
		$this->assertEquals('', $string_parser = new StringParser(''));
		$this->assertEquals(array('5'), $string_parser = new StringParser('5'));
		$this->assertEquals(array('7', '9'), $string_parser = new StringParser('7,9'));
		
	}

	public function testStringFail() {
		$this->assertFalse($string_parser = new StringParser('a'));
		$this->assertFalse($string_parser = new StringParser('5,z'));
		$this->assertFalse($string_parser = new StringParser('5 z'));
		$this->assertFalse($string_parser = new StringParser('5/z'));
		$this->assertFalse($string_parser = new StringParser('5,9,6'));

	}

	public function testCalcSucceed() {
		$calc = new StringCalculator();
		$this->assertEquals(0, $calc->add(''));
		$this->assertEquals(5, $calc->add('5'));
		$this->assertEquals(16, $calc->add('7,9'));

	}

	public function testCalcFail() {
		$calc = new StringCalculator();
		$this->assertFalse($calc->add('7,9,6'));
		$this->assertFalse($calc->add('7,9,a'));
		$this->assertFalse($calc->add('a'));
		
	}
}
