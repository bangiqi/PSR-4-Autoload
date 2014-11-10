<?php

/**
* Action for status social media
*/

namespace Social\Featured;

class Action
{
	private $namaSaya;
	
	public function __construct()
	{
		//echo "Rizki Ramdani";
		$this->namaSaya;
	}

	public function welcome($namaUser)
	{

		$namaSaya="Assalamualaikum saya <b>".$namaUser."</b><br >";
		return $namaSaya;

	}

	public function komentar($isiKomentar)
	{

		$waktu = date("Y-m-d H:i:s");

		$kolomKomentar = $isiKomentar."<br />Pada tangal <i>".$waktu."</i>";
		return $kolomKomentar;
	}

	public function setTimezone($kawasan)
	{
		return date_default_timezone_set($kawasan); 
	}
}