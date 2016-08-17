<?php

class Request {

	private $method;
	private $protocol;
	private $server_ip;
	private $remote_ip;
	private $resource;
	private $paremeter;

	public function __construct($method, $protocol, $server_ip, $remote_ip, $resource, $parameter) {

		$this->method = $method;
		$this->protocol = $protocol;
		$this->server_ip = $server_ip;
		$this->remote_ip = $remote_ip;
		$this->resource = $resource;
		$this->paremeter = $parameter;
	}

	public function __get($atrib) {

		return $this->$atrib;

	}

	public function __set($atrib, $value) {

		$this->$atrib = $value;

	}
}
