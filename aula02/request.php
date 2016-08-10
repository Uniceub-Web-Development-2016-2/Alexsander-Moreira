<?php

class Request
{
	private $protocol;
	private $ip;
	private $resource;
	private $parameter;
	private $method;

	public function __construct($method, $protocol, $ip, $resource, $parameter) {
		$this->protocol = $protocol;
		$this->ip = $ip;
		$this->resource = $resource;
		$this->parameter = $parameter;
		$this->method = $method;
	}

	public function __set($atrib, $value)
	{
	
		$this->$atrib = $value;
	}

	public function __get($atrib)
	{
		return $this->$atrib;
	}

	public function toString()
        {
                $request = $this->protocol.'://'.$this->ip.'/'.$this->resource.'?';
                foreach($this->parameter as $key=>$value)
                        {
                                $request = $request.$key.'='.$value.'&amp';
                        }
                return substr($request,0,-4);	
	}
}
$request = new Request('POST','http','172.22.51.17','resource',array('p1'=>'para','p2'=>'me', 'p3'=>'tro'));
echo $request->toString();
