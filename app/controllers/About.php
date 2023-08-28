<?php 

class About extends Controller{
    public function index ($nama='Zhofran',$pekerjaan='pelajar',$umur=38)
    {
    	$data['judul'] = ''About Me'';
        $data['nama']=$nama;
        $data['pekerjaan']=$pekerjaan;
        $data['usia']=$umur;
        $this->view('templates/header');
        $this->view('about/index',$data);
        $this->view('templates/footer');
    }

    public function page()
    {
    	$data['judul'] = 'Pages';
    	$this->view('templates/header');
        $this->view('about/page');
        $this->view('templates/footer');
    }
}

?>