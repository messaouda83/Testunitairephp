<?php
use Acs\Testphpunit\Math;
use PHPUnit\Framework\TestCase;
class MathTest extends TestCase

{
public function testcarre(){


//\Acs\Testphpunit\Math::carre(2);
$this->assertEquals(6, \Acs\Testphpunit\Math::carre(2));
}
}
?>