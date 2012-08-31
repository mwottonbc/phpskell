<?php

require_once(dirname(__FILE__).'/../src/partial.php');

class PartialAppTest extends PHPUnit_Framework_TestCase
{
	public function testPap() {
		$papplied =  pap(function($a,$b){ return $a + $b; }, 1);
		$this->assertEquals(2,$papplied(1));
	}

	public function testPap2() {
		$papplied =  pap(function($a,$b, $c){ return $a + $b + $c; }, 1);
		$this->assertEquals(4,$papplied(1, 2));
	}

	public function testDoublePap() {
		$papplied =  pap(function($a,$b, $c){ return $a + $b + $c; }, 1);
		$pap2 = pap($papplied, 2);
		$this->assertEquals(6,$pap2(3));
	}

	// this is a bit unfortunate - we might expect that if we
	// apply a single argument, it might evaluate it strictly.
	// instead we get a closure that must be called. arguable as
	// to the correct semantics, but i've spent half an hour on
	// this now.
	public function testSingleArgPap() {
		$papplied =  pap(function($a){ return $a + 1; }, 1);
		$this->assertEquals(2,$papplied());
	}
}
