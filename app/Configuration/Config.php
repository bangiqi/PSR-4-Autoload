<?php

namespace App\Configuration;

/**
* Config
*/
class Config
{
	
	function __construct()
	{
		echo "testing";
	}

	function setTimezone($kawasan)
	{
		return date_default_timezone_set($kawasan); 
	}
}