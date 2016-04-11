<?php

namespace App\View\Helper;

use Cake\View\Helper;

class kikHelper extends Helper{


	private $base_url = "http://localhost/kik/";

	public function base_url($args=null){

		if($args==null){
			return $this->base_url;
		}else{
			return $this->base_url.$args;
		}
		
	}

}