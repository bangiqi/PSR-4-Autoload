<?php

namespace Social\Repositories;

/**
* Userrepository
*/

class UserRepository
{
	
	public function __construct()
	{
		die("Ini user");
	}

	public function status()
	{
		echo "ini status saya";
	}

	public function setTimezone($kawasan)
	{
		return date_default_timezone_set($kawasan); 
	}
}