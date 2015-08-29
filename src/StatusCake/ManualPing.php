<?php namespace SSX\StatusCake;

Trait ManualPing {
	use \SSX\StatusCake\BasePing;

	public function ping() {
		// Send our ping back to StatusCake
       	return $this->sendPing();
   }

}