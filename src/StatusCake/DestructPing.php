<?php namespace SSX\StatusCake;

Trait DestructPing {
	use \SSX\StatusCake\BasePing;

	public function __destruct() {
		// Send our ping back to StatusCake
       	return $this->sendPing();   	
   }

}