<?php

class Siswa_model
{
	private $sw = [
		[
			"nama" => "gabut",
			"nis" => "12345",
			"email" => "gabut99@gmail.com"
		],
		[
			"nama" => "turu",
			"nis" => "56789",
			"email" => "turu335@gmail.com"
		]
	];

	public function getAllSiswa(){
		return $this->sw;
	}
}

?>