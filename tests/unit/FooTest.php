<?php
/**
 * Created by PhpStorm.
 * User: adsmurai
 * Date: 21/03/16
 * Time: 20:05
 */

namespace Tests\Unit;


use Kata\Yathzee\Foo;

class FooTest extends \PHPUnit_Framework_TestCase
{
    public function testReturnsTrue(){
        $this->assertTrue((new Foo())->returnTrue());
    }

}
