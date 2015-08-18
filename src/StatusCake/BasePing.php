<?php namespace SSX\StatusCake;

Trait BasePing {

	private $key 			= null;
	private $test_id 		= null;

	protected function sendPing() {
		
		// Send the keys within our object
		$this->key 			= getenv("STATUSCAKE_PK");
		$this->test_id 		= getenv("STATUSCAKE_TESTID");

		// Test to see that we have a private key and test ID
		if (($this->key == null) || ($this->test_id == null)) {

			throw new Exception("StatusCake: Private key and test ID are not set.", 1);			
		}
		
		// Now send a ping
		try {

			$client = new \GuzzleHttp\Client();

			$res = $client->get('http://push.statuscake.com/?PK'.$this->key.'&TestID='.$this->test_id.'&time=0');

			if ($res->getStatusCode() != 200) {
				throw new Exception("StatusCake: Unable to send request to StatusCake.", 1);
			}

		} catch (Exception $e) {			

			throw new Exception("StatusCake: Error pushing request: ".$e->getMessage());

		}
	}

}