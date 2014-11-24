<?php

class ApiController extends Dingo\Api\Routing\Controller{

	public function getComponents() {
		return Component::all();
	}

}
