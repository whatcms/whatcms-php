<?php

namespace WhatCMS;

/**
 * Base class for WhatCMS API wrapper
 *
 */
class WhatCMS{

	protected $api_key = '';


	public function __construct($api_key){

		$this->api_key = $api_key;

	}


}

