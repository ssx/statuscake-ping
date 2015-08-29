<?php

class ExampleTest extends PHPUnit_Framework_TestCase
{
	use \SSX\StatusCake\ManualPing;

    /**
     * Test that the ping fires off to the API
     *
     * @return void
     */
    public function testPing()
    {
    	// Fire off the manual ping
    	$resource = $this->ping();

    	// If we've got this far, it's a 200 back, check the body is 'success'
		$this->assertEquals((string)$resource->getBody(), "success");
    }
}
