<?php
namespace F3;

use GuzzleHttp\Client;

class Curl extends \Prefab{

	protected $client;

	public function __construct($base_uri){
		$this->client=new Client([]);
	}

}