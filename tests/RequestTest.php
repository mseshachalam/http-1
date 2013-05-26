<?php namespace OrnoTest;

use Orno\Http\Request;

class RequestTest extends \PHPUnit_Framework_TestCase
{
    public function testBuildsFromGlobals()
    {
        $request = (new Request)->build();

        $this->assertInstanceOf('Orno\Http\Request', $request);
        $this->assertInstanceOf('Orno\Http\RequestInterface', $request);
        $this->assertInstanceOf('Symfony\Component\HttpFoundation\Request', $request);
    }
}
