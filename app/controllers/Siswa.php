<?php

/**
 * 
 */
class Siswa extends controller
{
	
	public function index()
	{
		# code...
		$data['judul'] = 'Daftar Siswa';
		$data['nama'] = $this->model('Siswa_model')->getAllSiswa();
        $this->view('templates/header',$data);
        $this->view('siswa/index',$data);
        $this->view('templates/footer');
	}
}

?>