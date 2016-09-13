<?php

class RequestController
{
	const VALID_METHODS = array('GET', 'POST', 'PUT', 'DELETE');

	public function create_request($request_info)
	{
		if(!self::is_valid_method($request_info['REQUEST_METHOD']))
		{
			return array("code" => "405", "message" => "method not allowed");i
		}			
	}
	
	public function is_valid_method($method)
	{
		if(is_null($method) || !in_array($method, self::VALID_METHODS)) {
			return false;
		}

		return true;
	}

	public function is_valid_protocol($protocol)
	{
		if(is_null($protocol) || !in_array($protocol, self::VALID_PROTOCOL)) {
			return false;
		}

		return true;
	}

	public function is_valid_client_addr($remotep))
	{
		if(!filter_var($remoteip, FILTER_VALIDATE_IP)) {
			return false;
		}

		return true;
	}











}
